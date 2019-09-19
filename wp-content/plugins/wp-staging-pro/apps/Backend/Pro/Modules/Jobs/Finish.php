<?php

namespace WPStaging\Backend\Pro\Modules\Jobs;

use WPStaging\WPStaging;

/**
 * Class Finish
 * @package WPStaging\Backend\Modules\Jobs
 */
class Finish extends \WPStaging\Backend\Modules\Jobs\Job {

   private $tables;
   
   private $db;

   /**
    * Start Module
    * @return object
    */
   public function start() {
      
      $this->db = WPStaging::getInstance()->get( "wpdb" );
      
      // Delete Cache Files
      //$this->deleteCacheFiles();
      
      $this->getTableRecords();  
      
      $this->deleteTables();

      // Do not do anything
      return $this->response = array(
          "status" => 'finished',
          "percentage" => 100,
          "total" => $this->options->totalSteps,
          "step" => $this->options->currentStep,
          "last_msg" => $this->logger->getLastLogMsg(),
          "running_time" => $this->time() - time(),
          "job_done" => true
      );
   }

   /**
    * Delete Cache Files
    */
   protected function deleteCacheFiles() {
      $this->log( "Finish: Deleting clone job's cache files..." );

      // Clean cache files
      $this->cache->delete( "clone_options" );
      $this->cache->delete( "files_to_copy" );

      $this->log( "Finish: Clone job's cache files have been deleted!" );
   }

   /**
    * Delete Tables
    */
   public function deleteTables() {

      foreach ( $this->tables as $table ) {
         $this->db->query( "DROP TABLE {$table}" );
      }
   }

   /**
    * Get tmp Tables
    */
   private function getTableRecords() {

      $tables = $this->db->get_results( "SHOW TABLE STATUS LIKE 'wpstgtmp\_%'" );

      $this->tables = array();

      foreach ( $tables as $table ) {
         $this->tables[] = $table->Name;
      }

      $this->tables = json_decode( json_encode( $this->tables ) );
   }

}
