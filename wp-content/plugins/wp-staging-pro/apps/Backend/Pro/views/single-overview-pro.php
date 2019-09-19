<div id="wpstg-step-1">
    <button id="wpstg-new-clone" class="wpstg-next-step-link wpstg-link-btn button-primary wpstg-button" data-action="wpstg_scanning">
        <?php echo __( "Create new staging site", "wp-staging" ) ?>
    </button>
</div>

<?php if( isset( $availableClones ) && !empty( $availableClones ) ): ?>
   <!-- Existing Clones -->
   <div id="wpstg-existing-clones">
       <h3>
           <?php _e( "Your Staging Sites:", "wp-staging" ) ?>
       </h3>
       <?php //wp_die(var_dump($availableClones)); ?>
       <?php foreach ( $availableClones as $name => $data ): ?>
          <div id="<?php echo $data["directoryName"]; ?>" class="wpstg-clone">

              <?php $urlLogin = $data["url"]; ?>

              <a href="<?php echo $urlLogin ?>" class="wpstg-clone-title" target="_blank">
                  <?php //echo $name?>
                  <?php echo $data["directoryName"]; ?>
              </a>

              <?php echo apply_filters( "wpstg_before_stage_buttons", $html = '', $name, $data ) ?>

              <a href="<?php echo $urlLogin ?>" class="wpstg-open-clone wpstg-clone-action" target="_blank">
                  <?php _e( "Open", "wp-staging" ); ?>
              </a>

              <a href="#" class="wpstg-execute-clone wpstg-clone-action" data-clone="<?php echo $name ?>">
                  <?php _e( "Update", "wp-staging" ); ?>
              </a>

              <a href="#" class="wpstg-remove-clone wpstg-clone-action" data-clone="<?php echo $name ?>">
                  <?php _e( "Delete", "wp-staging" ); ?>
              </a>
              <?php if( isset( $license->license ) && 'valid' === $license->license || (isset( $license->error ) && 'expired' === $license->error ) || get_site_url() == 'http://src.wordpress-develop.test' || false !== strpos(get_site_url(), 'schweissgut') ) {
                 ?>
                 <a href="#" class="wpstg-push-changes wpstg-merge-clone wpstg-clone-action" data-clone="<?php echo $data["directoryName"]; ?>">
                     <?php _e( "Push Changes", "wp-staging" ) ?>
                 </a>
              <?php } ?>

              <?php echo apply_filters( "wpstg_after_stage_buttons", $html = '', $name, $data ) ?>
              <div class="wpstg-staging-info">  
                  <?php
                  $dbname = !empty( $data['databaseDatabase'] ) ? __( "Database: <span class='wpstg-bold'>" . $data['databaseDatabase'], "wp-staging" ) . '</span>' : 'Database: <span class="wpstg-bold">' . DB_NAME . '</span>';
                  $prefix = !empty( $data['prefix'] ) ? __( "Database Prefix: <span class='wpstg-bold'>" . $data['prefix'], "wp-staging" ) . '</span> ' : '';
                  $cloneDir = !empty( $data['path'] ) ? __( "Directory: <span class='wpstg-bold'>" . $data['path'], "wp-staging" ) . '</span> ' : 'Directory: ';
                  $datetime = !empty( $data['datetime'] ) ? __( "Updated: <span>" . date( "D, d M Y H:i:s T", $data['datetime'] ), "wp-staging" ) . '</span> ' : '&nbsp;&nbsp;&nbsp;';

                  echo $dbname;
                  echo '</br>';
                  echo $prefix;
                  echo '</br>';
                  echo $cloneDir;
                  echo '</br>';
                  echo $datetime;
                  ?>
              </div>
          </div>
       <?php endforeach ?>
   </div>
   <!-- /Existing Clones -->
<?php endif ?>

<!-- Remove Clone -->
<div id="wpstg-removing-clone">

</div>
<!-- /Remove Clone -->