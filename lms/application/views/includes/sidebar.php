<!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">

              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

            </div><a class="navbar-brand" href="">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="<?php echo BASE_URL; ?>public/assets/img/mentor.png" alt="" width="40" /><span class="font-sans-serif">mentor</span>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>
                  <!-- parent pages--><a href="<?php echo BASE_URL; ?>access/index" class="nav-link active" role="button" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-home"></span></span><span class="nav-link-text ps-1">Home</span>
                    </div>
                  </a>
                  <?php if($_SESSION['user_type'] == "instructor") { ?>
                  <!-- parent pages--><a href="<?php echo BASE_URL; ?>course/all_courses" class="nav-link" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Course</span>
                    </div>
                  </a>
                  <?php } ?>
                  <?php if($_SESSION['user_type'] == "student") { ?>
                  <!-- parent pages--><a href="<?php echo BASE_URL; ?>student/all_courses" class="nav-link" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Course</span>
                    </div>
                  </a>
                  <?php } ?>
                  <!-- parent pages--><a class="nav-link" href="app/chat.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link" href="app/calendar.html" role="button" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-bell"></span></span><span class="nav-link-text ps-1">Notifications</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link" href="app/calendar.html" role="button" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">Profile</span>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>
                  <!-- parent pages--><a class="nav-link" href="<?php if($_SESSION['user_type'] == "admin") { echo BASE_URL.'admin/logout'; } else { echo BASE_URL.'access/logout'; }?>" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-sign-out-alt"></span></span><span class="nav-link-text ps-1">Logout</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>	