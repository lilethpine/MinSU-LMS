<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<?php require_once(APP_DIR . 'views/includes/header.php'); ?>
<?php require_once(APP_DIR . 'views/includes/sidebar.php'); ?>
<?php require_once(APP_DIR . 'views/includes/topbar.php'); ?>
    
      <div class="card mb-3">
            <div class="card-body">
              <div class="row flex-between-center">
                <div class="col-sm-auto mb-2 mb-sm-0">
                  <h6 class="mb-0">Activity</h6>
                </div>
              </div>
            </div>
      </div>
      <?php flash_alert(); ?>
      
      <div class="card">
            <div class="card-body p-0 overflow-hidden">
              <div class="row g-0">
                <div class="col-12 p-card">
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="row">
                        <div class="col-lg-8">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
      </div>

<?php require_once(APP_DIR . 'views/includes/footbar.php'); ?>
<?php require_once(APP_DIR . 'views/includes/footer.php'); ?>