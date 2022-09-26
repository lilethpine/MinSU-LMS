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
                              <h5 class="mt-3 mt-sm-0"><strong><?php echo $activity['act_title']; ?></strong></h5><br>
                              <p class="fs--1 mb-2 mb-md-3"><?php echo $activity['act_desc']; ?></p>
                              <h6 class="mb-0"><a href="<?php echo BASE_URL.'/public/uploads/activity/'.$activity['act_attachments']; ?>" target="_blank"><?php echo $activity['act_attachments']; ?> </a></h6>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-between flex-column">
                              <form method="POST" action="<?php echo BASE_URL.'student/submit_act'; ?>" enctype="multipart/form-data">
                                    <div class="d-none d-lg-block">
                                          <h6><strong>Due Date: <?php echo date('M d, Y h:i A', strtotime($activity['due_date'])); ?></strong></h6>
                                          <div class="border-dashed-bottom my-3"></div>
                                          <h5 class="mt-3 mt-sm-0">Add Attachments</h5>
                                    </div>
                                    <div class="mt-2">
                                          <input type="hidden" name="cou_act_id" value="<?php echo $activity['cou_act_id']; ?>">
                                          <input class="form-control " type="file" name="attachments" required>
                                          <input class="btn btn-sm btn-primary d-lg-block mt-lg-2 px-7" type="submit" name="submit" value="Submit">
                                    </div>
                              </form>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer bg-light pt-0">
                  <form class="d-flex align-items-center border-top border-200 pt-3">
                        <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                        </div>
                        <input class="form-control rounded-pill ms-2 fs--1" type="text" placeholder="Write a comment..." />
                  </form>
            </div>
      </div>

<?php require_once(APP_DIR . 'views/includes/footbar.php'); ?>
<?php require_once(APP_DIR . 'views/includes/footer.php'); ?>