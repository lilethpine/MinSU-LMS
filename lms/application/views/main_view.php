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
                  <h6 class="mb-0">Home</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <?php foreach($courses as $course) { ?>
                <div class="mb-4 col-md-6 col-lg-4">
                  <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                    <div class="overflow-hidden">
                      <div class="position-relative rounded-top overflow-hidden"><img class="img-fluid rounded-top" src="<?php echo BASE_URL; ?>public/assets/img/1.jpg" alt="" />
                      </div>
                      <div class="p-3">
                        <h5 class="mb-1"> <a href="<?php echo BASE_URL; ?>course/view/<?php echo $course['course_id']; ?>"><?php echo $course['course_description']; ?></a></h5>
                        <p class="fs--1 mb-3"><?php echo $course['course_description']; ?></p>
                      </div>
                    </div>
                    <?php if($_SESSION['user_type'] == "instructor") { ?>
                    <div class="d-flex flex-between-center px-3">
                      <div><a class="btn btn-sm btn-falcon-default me-2" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a><a class="btn btn-sm btn-falcon-default" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash"></span></a></div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        

<?php require_once(APP_DIR . 'views/includes/footbar.php'); ?>
<?php require_once(APP_DIR . 'views/includes/footer.php'); ?>