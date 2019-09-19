<?php

namespace WPStaging\Backend\Pro\Modules\Jobs;

use WPStaging\Backend\Modules\Jobs\Exceptions\JobNotFoundException;
use WPStaging\Backend\Pro\Modules\Jobs\Multisite\ScanDirectories as muScanDirectories;
use WPStaging\Backend\Pro\Modules\Jobs\Multisite\Files as muFiles;
use WPStaging\Backend\Pro\Modules\Jobs\Multisite\SearchReplace as muSearchReplace;
use WPStaging\Backend\Pro\Modules\Jobs\DatabaseTmpExternal;
use WPStaging\Backend\Pro\Modules\Jobs\DatabaseTmp;
use WPStaging\Backend\Pro\Modules\Jobs\DataExternal;
use WPStaging\Utils;

/**
 * Class Processing
 * Collect clone and job data and delegate all further separate job modules
 * @package WPStaging\Backend\Pro\Modules\Jobs
 */
class Processing extends \WPStaging\Backend\Modules\Jobs\Job {

    /**
     * Start the cloning job
     */
    public function start() {


        // Save default job settings to cache file
        $this->init();

        $methodName = $this->options->currentJob;

        if( !method_exists( $this, $methodName ) ) {
            // If method not exists, start over with default action
            $methodName = 'jobFinish';
            $this->log( "Processing: Force method '{$methodName}'" );
            $this->cache->delete( "clone_options" );
            $this->cache->delete( "files_to_copy" );
            // Save default job settings and create clone_options with default settings
            $this->init();
        }

        // Call the job
        return $this->{$methodName}();
    }

    /**
     * Save processing default settings
     * @return bool
     */
    private function init() {
        // Make sure this runs one time only on start of processing
        if( !isset( $_POST ) || !isset( $_POST["clone"] ) || !empty( $this->options->currentJob ) ) {
            return false;
        }

        // Delete old job files initially
        $this->cache->delete( 'clone_options' );
        $this->cache->delete( 'files_to_copy' );

        // Basic Options
        $this->options->root           = str_replace( array("\\", '/'), DIRECTORY_SEPARATOR, ABSPATH );
        $this->options->existingClones = get_option( "wpstg_existing_clones_beta", array() );

        if( isset( $_POST["clone"] ) && array_key_exists( $_POST["clone"], $this->options->existingClones ) ) {
            $this->options->current          = $_POST["clone"];
            $this->options->databaseUser     = $this->options->existingClones[strtolower( $this->options->current )]['databaseUser'];
            $this->options->databasePassword = $this->options->existingClones[strtolower( $this->options->current )]['databasePassword'];
            $this->options->databaseDatabase = $this->options->existingClones[strtolower( $this->options->current )]['databaseDatabase'];
            $this->options->databaseServer   = $this->options->existingClones[strtolower( $this->options->current )]['databaseServer'];
            $this->options->databasePrefix   = $this->options->existingClones[strtolower( $this->options->current )]['databasePrefix'];
            $this->options->url              = $this->options->existingClones[strtolower( $this->options->current )]['url'];
            $this->options->path             = wpstg_replace_windows_directory_separator (trailingslashit($this->options->existingClones[strtolower( $this->options->current )]['path']));
        }

        // Clone
        $this->options->clone              = $_POST["clone"];
        $this->options->cloneDirectoryName = preg_replace( "#\W+#", '-', strtolower( $this->options->clone ) );
        $this->options->cloneNumber        = $this->options->existingClones[strtolower( $this->options->clone )]['number'];
        $this->options->prefix             = $this->getPrefix();


        $this->options->excludedTables = array();
        $this->options->clonedTables   = array();

        // Files
        $this->options->totalFiles  = 0;
        $this->options->copiedFiles = 0;

        // Directories
        $this->options->includedDirectories = array();
        $this->options->excludedDirectories = array();
        $this->options->extraDirectories    = array();
        $this->options->directoriesToCopy   = array();
        $this->options->scannedDirectories  = array();

        // Job
        //$this->options->currentJob              = "";
        //$this->options->currentJob              = "jobCopyDatabaseTmp";
        //$this->options->currentJob              = "jobSearchReplace";
        $this->options->currentJob  = "JobFileScanning";
        $this->options->currentStep = 0;
        $this->options->totalSteps  = 0;



        // Create new Job object
        $this->options->job = new \stdClass();


        // Excluded Tables POST
        if( isset( $_POST["excludedTables"] ) && is_array( $_POST["excludedTables"] ) ) {
            $this->options->excludedTables = $_POST["excludedTables"];
        } else {
            $this->options->excludedTables = array();
        }

        // Excluded Directories POST
        if( isset( $_POST["excludedDirectories"] ) && is_array( $_POST["excludedDirectories"] ) ) {
            $this->options->excludedDirectories = $_POST["excludedDirectories"];
        }


        // Included Directories POST
        if( isset( $_POST["includedDirectories"] ) && is_array( $_POST["includedDirectories"] ) ) {
            $this->options->includedDirectories = $_POST["includedDirectories"];
        }

        // Extra Directories POST
        if( isset( $_POST["extraDirectories"] ) && !empty( $_POST["extraDirectories"] ) ) {
            $this->options->extraDirectories = array_map( 'trim', $_POST["extraDirectories"] );
        }

        // Excluded Directories TOTAL
        // Do not copy the wp-staging plugins folder
        $excludedDirectories                = array(
            ABSPATH . $this->options->current . DIRECTORY_SEPARATOR . 'wp-content' . DIRECTORY_SEPARATOR . 'plugins' . DIRECTORY_SEPARATOR . 'wp-staging-pro',
            ABSPATH . $this->options->current . DIRECTORY_SEPARATOR . 'wp-content' . DIRECTORY_SEPARATOR . 'plugins' . DIRECTORY_SEPARATOR . 'wp-staging'
        );
        $this->options->excludedDirectories = array_merge( $excludedDirectories, $this->options->excludedDirectories );

        // Excluded Files
        $this->options->excludedFiles = array(
            '.htaccess',
            '.DS_Store',
            '.git',
            '.svn',
            '.tmp',
            'desktop.ini',
            '.gitignore',
            '.log'
        );

        // Directories to Copy Total
        $this->options->directoriesToCopy = array_merge(
                $this->options->includedDirectories, $this->options->extraDirectories
        );


        return $this->saveOptions();
    }

    /**
     * Get prefix of staging site
     * @return string
     */
    private function getPrefix() {
        $prefix = 'tmp_';

        if( $this->isExternalDatabase() && isset( $this->options->existingClones[$this->options->current]['databasePrefix'] ) ) {
            $prefix = $this->options->existingClones[$this->options->current]['databasePrefix'];
        }

        if( isset( $this->options->existingClones[$this->options->clone]['prefix'] ) ) {
            $prefix = $this->options->existingClones[$this->options->clone]['prefix'];
        }
        return $prefix;
    }

    /**
     * @param object $response
     * @param string $nextJob
     * @return object
     */
    private function handleJobResponse( $response, $nextJob ) {
        // Job is not done. Status true means the process is finished
        if( isset( $response->status ) && true !== $response->status ) {
            return $response;
        }

        $this->options->currentJob  = $nextJob;
        $this->options->currentStep = 0;
        $this->options->totalSteps  = 0;

        // Save options
        $this->saveOptions();

        return $response;
    }

    /**
     * Check if external database is used
     * @return boolean
     */
    private function isExternalDatabase() {

        if( !empty( $this->options->databaseUser ) ) {
            return true;
        }
        return false;
    }

    /**
     * Step 0 (Deactivated) 
     * No need for this. The live tables are backuped either way in class DatabaseTmpRename
     * Backup Database Tables
     * @return object
     */
//    public function jobDatabaseBackup()
//    {
//        $databaseBackup = new \WPStaging\Backend\Pro\Modules\Jobs\DatabaseBackup;
//        return $this->handleJobResponse($databaseBackup->start(), 'jobFileScanning');
//    }

    /**
     * Step 1
     * Scan folders for files to copy
     * @return object
     */
    public function jobFileScanning() {
        if( is_multisite() ) {
            $directories = new muScanDirectories;
        } else {
            $directories = new ScanDirectories;
        }
        return $this->handleJobResponse( $directories->start(), "jobCopy" );
    }

    /**
     * Step 2
     * Copy Files
     * @return object
     */
    public function jobCopy() {
        if( is_multisite() ) {
            $files = new muFiles;
        } else {
            $files = new Files;
        }

        return $this->handleJobResponse( $files->start(), 'jobCopyDatabaseTmp' );
    }

    /**
     * Step 3
     * Copy Database tables to tmp tables
     * @return object
     */
    public function jobCopyDatabaseTmp() {

        if( $this->isExternalDatabase() ) {
            $database = new DatabaseTmpExternal();
        } else {
            $database = new DatabaseTmp();
        }

        return $this->handleJobResponse( $database->start(), 'jobSearchReplace' );
    }

    /**
     * Step 4
     * Search & Replace
     * @return object
     */
    public function jobSearchReplace() {

        if( is_multisite() ) {
//         if( $this->isExternalDatabase() ) {
//            $searchReplace = new muSearchReplaceExternal();
//         } else {
//            $searchReplace = new muSearchReplace();
//         }
            $searchReplace = new muSearchReplace();
        } else {
            $searchReplace = new \WPStaging\Backend\Pro\Modules\Jobs\SearchReplace();
        }

        return $this->handleJobResponse( $searchReplace->start(), 'jobData' );
    }

    /**
     * Step 5
     * So some data operations
     * @return object
     */
    public function jobData() {
//      if( $this->isExternalDatabase() ) {
//         $data = new DataExternal();
//      } else {
//         $data = new \WPStaging\Backend\Pro\Modules\Jobs\Data();
//      }
        $data = new \WPStaging\Backend\Pro\Modules\Jobs\Data();

        return $this->handleJobResponse( $data->start(), 'jobDatabaseRename' );
    }

    /**
     * Step 6
     * Switch live and tmp tables
     * @return object
     */
    public function jobDatabaseRename() {
//      if( $this->isExternalDatabase() ) {
//         $databaseBackup = new muDatabaseTmpRenameExternal();
//      } else {
//         $databaseBackup = new \WPStaging\Backend\Pro\Modules\Jobs\DatabaseTmpRename();
//      }
        $databaseBackup = new \WPStaging\Backend\Pro\Modules\Jobs\DatabaseTmpRename();

        return $this->handleJobResponse( $databaseBackup->start(), 'jobFinish' );
    }

    /**
     * Step 7
     * Finish Job
     * @return object
     */
    public function jobFinish() {
        $finish = new \WPStaging\Backend\Pro\Modules\Jobs\Finish;
        return $this->handleJobResponse( $finish->start(), '' );
    }

}
