<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<?php require_once(APP_DIR . 'views/includes/header.php'); ?>
<?php require_once(APP_DIR . 'views/includes/sidebar.php'); ?>
<?php require_once(APP_DIR . 'views/includes/topbar.php'); ?>
    
        <div class="row g-3">
          <div class="col-lg-8">
            <div class="card mb-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="ann-tab" data-bs-toggle="tab" href="#tab-ann" role="tab" aria-controls="tab-ann" aria-selected="true"><span class="fas fa-bullhorn me-2"></span>Announcement</a></li>
                  <li class="nav-item"><a class="nav-link" id="act-tab" data-bs-toggle="tab" href="#tab-act" role="tab" aria-controls="tab-act" aria-selected="false"><span class="fas fa-clipboard-list me-2"></span>Activity</a></li>
                  <li class="nav-item"><a class="nav-link" id="topic-tab" data-bs-toggle="tab" href="#tab-topic" role="tab" aria-controls="tab-topic" aria-selected="false"><span class="fas fa-bookmark me-2"></span>Topic</a></li>
                  <li class="nav-item"><a class="nav-link" id="materials-tab" data-bs-toggle="tab" href="#tab-materials" role="tab" aria-controls="tab-materials" aria-selected="false"><span class="fas fa-folder-open me-2"></span>Materials</a></li>
                </ul>
            </div>
            <?php flash_alert(); ?>
            <div id="myTabContent" class="tab-content">
              <!--Announcement-->
              <div class="tab-pane fade show active" id="tab-ann" role="tabpanel" aria-labelledby="ann-tab">    
                <div class="card mb-3">
                  <div class="card-header bg-light overflow-hidden">
                    <div class="d-flex align-items-center">
                      <div class="flex-1 ms-2">
                        <h5 class="mb-0 fs-0" >Announcement</h5>
                      </div>
                      <?php if($_SESSION['user_type'] == "instructor") { ?>
                      <div class="col-auto d-flex order-md-0">
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addAnnModal"> <span class="fas fa-plus me-2"></span>Post Announcement</button>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <?php foreach($announce as $ann) { ?>
                <div class="card mb-3">
                  <div class="card-header bg-light">
                    <div class="row justify-content-between">
                      <div class="col">
                        <div class="d-flex">
                          <div class="avatar avatar-2xl status-online">
                            <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
                          </div>
                          <div class="flex-1 align-self-center ms-2">
                            <p class="mb-1 lh-1"><a class="fw-semi-bold" href=""><?php echo $ann['fname'].' '.$ann['mname'].' '.$ann['lname']; ?></a></p>
                            <p class="mb-0 fs--1"><span><img src="<?php echo BASE_URL; ?>public/assets/img/clock.png" alt=""> 1 min ago</span></p>
                          </div>
                        </div>
                      </div>
                      <?php if($_SESSION['user_type'] == "instructor") { ?>
                      <div class="col-auto">
                        <div class="dropdown font-sans-serif">
                          <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-album-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-3" aria-labelledby="post-album-action"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Delete</a>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="card-body overflow-hidden">
                    <h5><?php echo $ann['title']; ?></h3>
                    <p><?php echo $ann['content']; ?></p>
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
                <?php } ?>
              </div>
              <!--Activtiy-->
              <div class="tab-pane fade" id="tab-act" role="tabpanel" aria-labelledby="act-tab">    
                <div class="card mb-3">
                  <div class="card-header bg-light overflow-hidden">
                    <div class="d-flex align-items-center">
                      <div class="flex-1 ms-2">
                        <h5 class="mb-0 fs-0" >Activity</h5>
                      </div>
                      <?php if($_SESSION['user_type'] == "instructor") { ?>
                      <div class="col-auto d-flex order-md-0">
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addActModal"> <span class="fas fa-plus me-2"></span>Post Activtiy</button>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <?php foreach($activities as $acts) { ?>
                <div class="card mb-3">
                  <div class="card-header bg-light">
                    <div class="row justify-content-between">
                      <div class="col">
                        <div class="d-flex">
                          <div class="avatar avatar-2xl status-online">
                            <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
                          </div>
                          <div class="flex-1 align-self-center ms-2">
                            <p class="mb-1 lh-1"><a class="fw-semi-bold" href=""><?php echo $acts['fname'].' '.$acts['mname'].' '.$acts['lname']; ?></a></p>
                            <p class="mb-0 fs--1"><span><img src="<?php echo BASE_URL; ?>public/assets/img/clock.png" alt=""> 1 min ago</span></p>
                          </div>
                        </div>
                      </div>
                      <?php if($_SESSION['user_type'] == "instructor") { ?>
                      <div class="col-auto">
                        <div class="dropdown font-sans-serif">
                          <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-album-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-3" aria-labelledby="post-album-action"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">View Submissions</a><a class="dropdown-item" href="#!">Delete</a>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="card-body overflow-hidden">
                  <?php if($_SESSION['user_type'] == "instructor") { ?>
                    <h6><a href="<?php echo BASE_URL; ?>activity/view_act/<?php echo $acts['cou_act_id']; ?>" title=""><?php echo $acts['act_title']; ?></a></h6>
                  <?php } ?>
                  <?php if($_SESSION['user_type'] == "student") { ?>
                    <h6><a href="<?php echo BASE_URL; ?>student/view_act/<?php echo $acts['cou_act_id']; ?>" title=""><?php echo $acts['act_title']; ?></a></h6>
                  <?php } ?>
                    <p><?php echo $acts['act_desc']; ?></p>
                    <h6 class="mb-0"><a href="<?php echo BASE_URL.'/public/uploads/activity/'.$acts['act_attachments']; ?>" target="_blank"><?php echo $acts['act_attachments']; ?> </a></h6>
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
                <?php } ?>
              </div>
              <!--Topic-->
              <div class="tab-pane fade" id="tab-topic" role="tabpanel" aria-labelledby="topic-tab">    
                <div class="card mb-3">
                  <div class="card-header bg-light overflow-hidden">
                    <div class="d-flex align-items-center">
                      <div class="flex-1 ms-2">
                        <h5 class="mb-0 fs-0" >Topic</h5>
                      </div>
                      <div class="col-auto d-flex order-md-0">
                        <button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button>
                        <?php if($_SESSION['user_type'] == "instructor") { ?>
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addTopicModal"> <span class="fas fa-plus me-2"></span>Create Topic</button>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php foreach($topics as $topic) { ?>
                <div class="card mb-3">
                  <div class="card-header bg-light">
                    <h6 class="mb-0"><a href="#" title=""><?php echo $topic['topic_desc']; ?> </a> <?php if($_SESSION['user_type'] == "instructor") { ?><a href="#" title=""><i class="fas fa-edit"></i></a>  <a href="#" title=""><i class="fas fa-plus-square"></i></a><?php } ?></h6>

                    <!-- TOPIC CONTENTS -->
                    <!-- SEARCH SA ACTIVITY NG TOPIC NA ITO -->
                    <?php 
                    // from topic_helper.php
                    $actitivies = topic_activities($topic['cou_topic_id']);
                    foreach($actitivies as $activity)
                    {
                    ?>
                    <br>
                      <?php if($_SESSION['user_type'] == "instructor") { ?>
                      <h6 class="mb-0"><a href="<?php echo BASE_URL; ?>activity/view_act/<?php echo $activity['cou_act_id']; ?>" title=""><?php echo $activity['act_title']; ?></a></h6>
                      <?php } ?>
                      <?php if($_SESSION['user_type'] == "student") { ?>
                      <h6 class="mb-0"><a href="<?php echo BASE_URL; ?>student/view_act/<?php echo $activity['cou_act_id']; ?>" title=""><?php echo $activity['act_title']; ?></a></h6>
                      <?php } ?>
                    <?php } ?>
                    <!-- END TOPIC CONTENTS -->
                  </div>
                </div>
                <?php } ?>
              </div>
              <!--Materials-->
              <div class="tab-pane fade" id="tab-materials" role="tabpanel" aria-labelledby="materials-tab">    
                <div class="card mb-3">
                  <div class="card-header bg-light overflow-hidden">
                    <div class="d-flex align-items-center">
                      <div class="flex-1 ms-2">
                        <h5 class="mb-0 fs-0" >Materials</h5>
                      </div>
                      <?php if($_SESSION['user_type'] == "instructor") { ?>
                      <div class="col-auto d-flex order-md-0">
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addMatModal"> <span class="fas fa-plus me-2"></span>Post Materials</button>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <?php foreach($materials as $material) { ?>
                <div class="card mb-3">
                  <div class="card-header bg-light">
                    <div class="row justify-content-between">
                      <div class="col">
                        <div class="d-flex">
                          <div class="avatar avatar-2xl status-online">
                            <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
                          </div>
                          <div class="flex-1 align-self-center ms-2">
                            <p class="mb-1 lh-1"><a class="fw-semi-bold" href=""><?php echo $material['fname'].' '.$ann['mname'].' '.$ann['lname']; ?></a></p>
                            <p class="mb-0 fs--1"><span><img src="<?php echo BASE_URL; ?>public/assets/img/clock.png" alt=""> 1 min ago</span></p>
                          </div>
                        </div>
                      </div>
                      <?php if($_SESSION['user_type'] == "instructor") { ?>
                      <div class="col-auto">
                        <div class="dropdown font-sans-serif">
                          <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-album-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-3" aria-labelledby="post-album-action"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item" href="#!">Delete</a>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="card-body overflow-hidden">
                    <h5><?php echo $material['mat_title']; ?></h3>
                    <p><?php echo $material['mat_desc']; ?></p>
                    <h6 class="mb-0"><a href="<?php echo BASE_URL.'/public/materials/'.$material['mat_attachments']; ?>" target="_blank"><?php echo $material['mat_attachments']; ?> </a></h6>
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
                <?php } ?>
              </div>
            </div>
          </div> 
          <div class="col-lg-4">
            <?php require_once(APP_DIR . 'views/course/course_view_content/right_content.php'); ?>
          </div>
        </div>
        <!--Announcement Modal-->
        <div class="modal fade" id="addAnnModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content border">
              <form method="POST" action="<?php echo site_url('announcement/create_announcement'); ?>">
                <div class="modal-header px-card bg-light border-bottom-0">
                  <h5 class="modal-title">Create Announcement</h5>
                  <button class="btn-close me-n1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-card">
                  <div class="mb-3">
                    <label class="fs-0" for="title">Title</label>
                    <input type="hidden" name="course_id" value="<?php echo $course['course_id']; ?>">
                    <input class="form-control" type="text" id="title" name="title" required>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="content">Content</label>
                    <textarea class="form-control" id="content" type="text" name="content" required></textarea>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end align-items-center bg-light">
                  <button class="btn btn-primary px-4" type="submit" >Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--Activtiy Modal-->
        <div class="modal fade" id="addActModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content border">
              <form method="POST" action="<?php echo site_url('activity/create_activity'); ?>" enctype="multipart/form-data">
                <div class="modal-header px-card bg-light border-bottom-0">
                  <h5 class="modal-title">Create Activity</h5>
                  <button class="btn-close me-n1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-card">
                  <div class="mb-3">
                    <label class="fs-0" for="topic">Topic</label>
                    <select class="form-select" id="topic" name="cou_topic_id">
                      <option readonly>Select Topic</option>

                      <?php foreach(topics() as $topic){ ?>
                        <option value="<?php echo $topic['cou_topic_id']; ?>"><?php echo $topic['topic_desc']; ?></option> 
                      <?php } ?>
                      
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="title">Title</label>
                    <input type="hidden" name="course_id" value="<?php echo $course['course_id']; ?>">
                    <input class="form-control" type="text" id="title" name="act_title" required>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="content">Content</label>
                    <textarea class="form-control" id="content" type="text" name="act_desc" required></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="attach">Attachments</label>
                    <input class="form-control" type="file" id="attach" name="act_attachments" required>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="due_date">Due Date</label>
                    <input class="form-control" type="datetime-local" id="due_date" name="due_date" required>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end align-items-center bg-light">
                  <button class="btn btn-primary px-4" type="submit" >Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--Topic Modal-->
        <div class="modal fade" id="addTopicModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content border">
              <form method="POST" action="<?php echo site_url('topic/create_topic'); ?>">
                <div class="modal-header px-card bg-light border-bottom-0">
                  <h5 class="modal-title">Create Topic</h5>
                  <button class="btn-close me-n1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-card">
                  <div class="mb-3">
                    <label class="fs-0" for="topic">Topic Name</label>
                    <input type="hidden" name="course_id" value="<?php echo $course['course_id']; ?>">
                    <input class="form-control" type="text" id="topic" name="topic_desc" required>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end align-items-center bg-light">
                  <button class="btn btn-primary px-4" type="submit" >Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--Materials Modal-->
        <div class="modal fade" id="addMatModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content border">
              <form method="POST" action="<?php echo site_url('material/create_material'); ?>" enctype="multipart/form-data">
                <div class="modal-header px-card bg-light border-bottom-0">
                  <h5 class="modal-title">Create Material</h5>
                  <button class="btn-close me-n1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-card">
                  <div class="mb-3">
                    <label class="fs-0" for="topic">Topic</label>
                    <select class="form-select" id="topic" name="cou_topic_id">
                      <option readonly>Select Topic</option>

                      <?php foreach(topics() as $topic){ ?>
                        <option value="<?php echo $topic['cou_topic_id']; ?>"><?php echo $topic['topic_desc']; ?></option> 
                      <?php } ?>
                      
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="title">Title</label>
                    <input type="hidden" name="course_id" value="<?php echo $course['course_id']; ?>">
                    <input class="form-control" type="text" id="title" name="mat_title" required>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="content">Content</label>
                    <textarea class="form-control" id="content" type="text" name="mat_desc" required></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="attach">Attachments</label>
                    <input class="form-control" type="file" id="attach" name="mat_attachments" required>
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