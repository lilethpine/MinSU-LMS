              <div class="card mb-3">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Instructor</h5>
                </div>
                <?php foreach($instructor as $prof) {?>
                <div class="card-body">
                  <div class="d-flex">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h6 class="mb-0"><a href=""><?php echo $prof['fname'].' '.$prof['mname'].' '.$prof['lname']; ?></a></h6>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Students</h5>
                </div>
                <?php foreach($students as $student) {?>
                <div class="card-body">
                  <div class="d-flex">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h6 class="mb-0"><a href=""><?php echo $student['fname'].' '.$student['mname'].' '.$student['lname']; ?></a></h6>
                      <div class="border-dashed-bottom my-3"></div>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>