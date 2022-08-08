<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pendaftaran Pasien </title>
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
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/Logo_Bidan_Nyimas-3.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/Logo_Bidan_Nyimas-3.png">
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="<?= base_url(''); ?>assets/oneui/css/oneui.min.css">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/oneui/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/oneui/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/oneui/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/oneui/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/oneui/js/plugins/dropzone/dist/min/dropzone.min.css">
</head>

<body>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image overflow-hidden" style="background-image: url('<?= base_url(''); ?>assets/images/nakes.jpg');">
            <div class="bg-primary-dark-op">
                <div class="content content-narrow content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-4 mb-8 text-center text-sm-left">
                        <div class="flex-sm-fill">
                            <h1 class="font-w600 text-white mb-2 " data-toggle="appear" data-timeout="250">Pendaftaran Pasien</h1>
                        </div>
                        <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                            <span class="" data-toggle="appear" data-timeout="350">
                                <a class="btn-primary px-4 py-2" data-toggle="click-ripple" href="<?= base_url('C_dashboard'); ?>">
                                    <i class="si si-home"></i> Kembali
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
                <!-- Basic -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title"></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <form action="<?= base_url('C_pasienumum/update_data'); ?>/<?= $berobat['id_berobat'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="row push">
                                <div class="col-lg-4">
                                </div>
                                <div class="col-lg-8 col-xl-5">
                                    <div class="form-group">
                                        <label for="no_kk">Diagnosa</label>
                                        <input type="text" name="diagnosa" class="form-control" id="diagnosa" value="<?= $berobat['diagnosa'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <?php if ($berobat['hasil_lab'] != '-') { ?>
                                            <label for="no_kk">Hasil Lab <a href="<?= base_url('') ?>/assets/file_upload/<?= $berobat['hasil_lab'] ?>" class="btn btn-success">Download</a> </label>
                                        <?php } else { ?>
                                            <label for="no_kk">Hasil Lab</label>
                                        <?php } ?>
                                        <input type="file" name="hasil_lab" class="form-control" id="hasil_lab">
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">Rujukan</label>
                                        <input type="text" name="rujukan" class="form-control" id="rujukan" value="<?= $berobat['rujukan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">Resep Obat</label>
                                        <input type="text" name="jenis_obat" class="form-control" id="jenis_obat" value="<?= $berobat['jenis_obat'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">Pembayaran</label>
                                        <input type="text" name="pembayaran" class="form-control" id="pembayaran" value="<?= $berobat['pembayaran'] ?>">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Page Content -->
                </div>
            </div>
        </div>
    </main>
    <!-- END Main Container -->
    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
    </footer>
    <!-- END Footer -->
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
    <script src="<?= base_url(''); ?>assets/oneui/js/oneui.core.min.js"></script>
    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="<?= base_url(''); ?>assets/oneui/js/oneui.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Page JS Code -->
    <script src="<?= base_url(''); ?>assets/oneui/js/pages/be_pages_dashboard.min.js"></script>
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/dropzone/dropzone.min.js"></script>
    <script>
        jQuery(function() {
            One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);
        });
    </script>
</body>

</html>