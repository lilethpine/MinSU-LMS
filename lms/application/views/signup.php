<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                    <a class="d-flex flex-center mb-4" href="../../../index.html">
                        <img class="me-2" src="../../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="58" />
                        <span class="font-sans-serif fw-bolder fs-5 d-inline-block">lead</span>
                    </a>
                    <div class="row g-3">
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <a id="msu_student" class="portal" href="<?php echo site_url('logging_in'); ?>">
                                <div class="card h-md-100">
                                    <div class="card-body p-4 p-sm-5">
                                        <div class="text-center">
                                            Student Portal
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <a id="msu_faculty" class="portal" href="<?php echo site_url('logging_in'); ?>">
                                <div class="card h-md-100">
                                    <div class="card-body p-4 p-sm-5">
                                        <div class="text-center">
                                            Faculty Portal
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <a id="msu_rnd" class="portal" href="<?php echo site_url('logging_in'); ?>">
                                <div class="card h-md-100">
                                    <div class="card-body p-4 p-sm-5">
                                        <div class="text-center">
                                            R&D Portal
                                        </div>
                                    </div>
                                </div>
                            </a>
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
    <?php echo load_js(array('assets/js/jquery-3.6.0.min')) ?>

    <script>
        const portals = document.querySelectorAll('.portal');

        portals.forEach( (portal) => {
            portal.addEventListener("click", () => {
                sessionStorage.setItem('role', portal.id);
            });
        });
    </script>
</body>

</html>