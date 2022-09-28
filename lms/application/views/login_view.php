<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <?php echo load_js(array('assets/js/config')) ?>
    <?php echo load_js(array('vendors/overlayscrollbars/OverlayScrollbars.min')) ?>

    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <?php echo load_css(array('vendors/overlayscrollbars/OverlayScrollbars.min')); ?>
    <?php echo load_css(array('assets/css/theme.min')); ?>
</head>

<body>
    <!-- Main Content -->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <div class="row flex-center min-vh-100 py-6">
          <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4"><a class="d-flex flex-center mb-4" href="../../../index.html"><img class="me-2" src="<?php echo BASE_URL; ?>public/assets/img/mentor.png" alt="" width="58" /><span class="font-sans-serif fw-bolder fs-5 d-inline-block">mentor</span></a>
            <div class="card">
              <div class="card-body p-4 p-sm-5">
                <div class="row flex-between-center mb-2">
                  <div class="col-auto">
                    <h5>Log in</h5>
                  </div>
                  <div class="col-auto fs--1 text-600"><span class="mb-0 undefined">or</span> <span><a href="<?php echo site_url('signup'); ?>">Create an account</a></span></div>
                </div>
                
                <form method="post" action="<?php echo site_url('access/logging_in'); ?>" >
                  <?php flash_alert(); ?>
                  <div class="mb-3"><input class="form-control" name="email" type="email" placeholder="Email address" /></div>
                  <div class="mb-3"><input class="form-control" name="password" type="password" placeholder="Password" /></div>
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="basic-checkbox" checked="checked" /><label class="form-check-label mb-0" for="basic-checkbox">Remember me</label></div>
                    </div>
                    <div class="col-auto"><a class="fs--1" href="../../../pages/authentication/simple/forgot-password.html">Forgot Password?</a></div>
                  </div>
                  <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button></div>
                </form>
                <div class="position-relative mt-4">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or log in with</div>
                </div>
                <div class="row mt-2">
                  <div class="col-sm-12"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- End of Main Content -->

    <!-- JavaScripts -->
    <?php echo load_js(array('vendors/popper/popper.min')) ?>
    <?php echo load_js(array('vendors/bootstrap/bootstrap.min')) ?>
    <?php echo load_js(array('vendors/anchorjs/anchor.min')) ?>
    <?php echo load_js(array('vendors/is/is.min')) ?>
    <?php echo load_js(array('vendors/fontawesome/all.min')) ?>
    <?php echo load_js(array('vendors/lodash/lodash.min')) ?>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <?php echo load_js(array('vendors/list.js/list.min')) ?>
    <?php echo load_js(array('assets/js/theme')) ?>
</body>
</html>