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
                  <h6 class="mb-0">Courses</h6>
                </div>
                <?php if($_SESSION['user_type'] == "instructor") {?>
                <div class="col-auto d-flex order-md-0">
                  <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> <span class="fas fa-plus me-2"></span>Add Course</button>
                </div>
                <?php } ?>
                <?php if($_SESSION['user_type'] == "student") {?>
                <div class="col-auto d-flex order-md-0">
                  <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#joinCourseModal"> <span class="fas fa-plus me-2"></span>Join New Course</button>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php flash_alert(); ?>
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <?php foreach($courses as $course) { ?>
                <div class="mb-4 col-md-6 col-lg-4">
                  <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                  <?php if($_SESSION['user_type'] == "instructor") {?>
                    <div class="overflow-hidden">
                      <div class="position-relative rounded-top overflow-hidden"><a class="d-block" href="../../../app/e-commerce/product/product-details.html"><img class="img-fluid rounded-top" src="<?php echo BASE_URL; ?>public/assets/img/1.jpg" alt="" /></a>
                      </div>
                      <div class="p-3">
                        <h5 class="mb-1"> <a href="<?php echo BASE_URL; ?>course/view/<?php echo $course['course_id']; ?>"><?php echo $course['course_code']; ?></a></h5>
                        <p class="fs--1 mb-3"><?php echo $course['course_description']; ?></p>
                      </div>
                    </div>
                    <div class="d-flex flex-between-center px-3">
                      <div><a class="btn btn-sm btn-falcon-default me-2" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a><a class="btn btn-sm btn-falcon-default" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash"></span></a></div>
                    </div>
                    <?php } ?>
                    <?php if($_SESSION['user_type'] == "student") {?>
                    <div class="overflow-hidden">
                      <div class="position-relative rounded-top overflow-hidden"><a class="d-block" href="../../../app/e-commerce/product/product-details.html"><img class="img-fluid rounded-top" src="<?php echo BASE_URL; ?>public/assets/img/1.jpg" alt="" /></a>
                      </div>
                      <div class="p-3">
                        <h5 class="mb-1"> <a href="<?php echo BASE_URL; ?>student/view/<?php echo $course['course_id']; ?>"><?php echo $course['course_code']; ?></a></h5>
                        <p class="fs--1 mb-3"><?php echo $course['course_description']; ?></p>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <div class="modal fade" id="eventDetailsModal" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border"></div>
          </div>
        </div>
        <div class="modal fade" id="addEventModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content border">
              <form id="addEventForm" autocomplete="off" method="POST" action="" >
                <div class="modal-header px-card bg-light border-bottom-0">
                  <h5 class="modal-title">Create Course</h5>
                  <button class="btn-close me-n1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-card">
                  <div class="mb-3">
                    <label class="fs-0" for="code">Code</label>
                    <input class="form-control" type="text" id="code" name="code" value="<?php echo random_string('alnum', 6); ?>" readonly >
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="program">Program</label>
                    <select class="form-select" name="prog_id">
                      <option readonly>Select Program</option>
                      
                      <?php foreach(programs() as $prog){ ?>
                        <option value="<?php echo $prog['prog_id']; ?>"><?php echo $prog['prog_code']; ?> - <?php echo $prog['major']; ?></option> 
                      <?php } ?>
                      
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="course_code">Course Code</label>
                    <input class="form-control" type="text" name="course_code" required/>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="course_description">Course Description</label>
                    <input class="form-control" type="text" name="course_description" required/>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="units">Units</label>
                    <input class="form-control" type="text" name="units" required/>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="room">Room</label>
                    <input class="form-control" type="text" name="room" required/>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="section">Section</label>
                    <input class="form-control" type="text" name="section" required/>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="schedule">Schedule</label>
                    <input class="form-control" type="text" name="schedule" required/>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="semester">Semester</label>
                    <input class="form-control" type="text" name="semester" value="<?php echo sem(); ?>" readonly/>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="academic_year">Academic Year</label>
                    <input class="form-control" type="text" name="academic_year" value="<?php echo ay(); ?>" readonly/>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end align-items-center bg-light">
                  <button class="btn btn-primary px-4" type="submit" name="create_course" >Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal fade" id="joinCourseModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content border">
              <form id="addEventForm" autocomplete="off" method="POST" action="<?php echo site_url('student/join_course'); ?>" >
                <div class="modal-header px-card bg-light border-bottom-0">
                  <h5 class="modal-title">Join with a Code</h5>
                  <button class="btn-close me-n1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-card">
                  <div class="mb-3">
                    <label class="fs-0" for="code">Code</label>
                    <input class="form-control" id="code" type="text" name="code" required/>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end align-items-center bg-light">
                  <button class="btn btn-primary px-4" type="submit" >Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>

<?php require_once(APP_DIR . 'views/includes/footbar.php'); ?>
<?php require_once(APP_DIR . 'views/includes/footer.php'); ?>