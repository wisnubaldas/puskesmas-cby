<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard Admin</title>
    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/images/icon.png">
    <link rel="icon" type="image/favicon.png" sizes="192x192" href="">
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="<?= base_url('');?>assets/oneui/css/oneui.min.css">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="bg-image overflow-hidden" style="background-image: url('assets/images/nakes.jpg');">
                <div class="bg-primary-dark-op">
                    <div class="content content-narrow content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-4 mb-8 text-center text-sm-left">
                            <div class="flex-sm-fill">
                                <a class="font-w600 text-white mb-2 font-size-h1" href="<?= base_url('C_dashboard');?>">
                                    <span class="" data-toggle="appear">Dashboard</span>
                                </a>
                                <h2 class="h3 font-w400 text-white-75 mb-2 invisible" data-toggle="appear" data-timeout="250">Puskesmas</h2>
                            </div>
                            <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                                <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                                    <a class="btn btn-success px-4 py-2" data-toggle="click-ripple" href="<?= base_url('C_daftarberobat');?>">
                                        <i class="si si-add"></i> Pendaftaran Berobat
                                    </a>
                                </span>
                                <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                                    <a class="btn btn-danger px-4 py-2" data-toggle="click-ripple" href="<?= base_url('C_login/logout');?>">
                                        <i class="si si-logout"></i> Logout
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->
            <!-- Page Content -->
            <div class="content content-narrow">
                <div class="content">
                    <!-- Simple Ribbon -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Glass on Background Color -->
                            <div class="block">
                                <div class="bg-image" style="background-color: #1f939b;">
                                    <div class="block-content block-content-full bg-black-50 ribbon ribbon-glass">
                                        <div class="text-center py-6">
                                            <h3 class="text-white mb-0">Pasien BPJS</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <a href="<?= base_url('C_bpjs');?>"><button type="button" class="btn btn-success btn-lg btn-block">Lihat</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Glass on Background Color -->
                        </div>
                        <div class="col-md-6">
                            <!-- Glass on Background Image -->
                            <div class="block">
                                <div class="bg-image" style="background-color: #1f939b;">
                                    <div class="block-content block-content-full bg-black-50 ribbon ribbon-glass">
                                        <div class="text-center py-6">
                                            <h3 class="text-white mb-0">Pasien Umum</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <a href="<?= base_url('C_pasienumum');?>"><button type="button" class="btn btn-success btn-lg btn-block">Lihat</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <!-- Glass on Background Image -->
                            <div class="block">
                                <div class="bg-image" style="background-color: #1f939b;">
                                    <div class="block-content block-content-full bg-black-50 ribbon ribbon-glass">
                                        <div class="text-center py-6">
                                            <h3 class="text-white mb-0">Pendaftaran Pasien</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <a href="<?= base_url('C_tambahdatapasien');?>"><button type="button" class="btn btn-success btn-lg btn-block">Lihat</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Glass on Background Image -->
                            <div class="block">
                                <div class="bg-image" style="background-color: #1f939b;">
                                    <div class="block-content block-content-full bg-black-50 ribbon ribbon-glass">
                                        <div class="text-center py-6">
                                            <h3 class="text-white mb-0">Rekam Medis</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <a href="<?= base_url('C_rekammedis');?>"><button type="button" class="btn btn-success btn-lg btn-block">Lihat</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                              
                    </div>
                </div>
                <!-- END Simple Ribbon -->
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
        </footer>
        <!-- END Footer -->
        <!-- Apps Modal -->
        <!-- Opens from the modal toggle button in the header -->
    </div>
    <!-- END Page Container -->
    <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
    <script src="<?= base_url('');?>assets/oneui/js/oneui.core.min.js"></script>
    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="<?= base_url('');?>assets/oneui/js/oneui.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="<?= base_url('');?>assets/oneui/js/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Page JS Code -->
    <script src="<?= base_url('');?>assets/oneui/js/pages/be_pages_dashboard.min.js"></script>
</body>

</html>