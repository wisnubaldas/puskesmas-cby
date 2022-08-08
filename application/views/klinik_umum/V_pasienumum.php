<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pasien Umum</title>
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
    <link rel="icon" type="image/png" sizes="192x192" href="">
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
                                <h1 class="font-w600 text-white mb-2 invisible" data-toggle="appear">Pasien Umum</h1>
                            </div>
                            <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                                <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                                    <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="<?= base_url('C_dashboard');?>">
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
            <div class="content">
                <div class="row" style="margin-top: 50px">
                    <div class="col-xs-4 col-xs-offset-4">
                        <form action="<?= base_url('C_datapasien/search') ?>" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Masukan Kata Kunci...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Cari</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Dynamic Table Full -->
                <div class="block">
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Pasien</th>
                                    <th>Tinggi Badan</th>
                                    <th>Berat Badan</th>
                                    <th>S</th>
                                    <th>O</th>
                                    <th>A</th>
                                    <th>P</th>
                                    <th>Jenis Poli</th>
                                    <th>Diagnosa</th>
                                    <th>Resep Obat</th>
                                    <th>Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            foreach ($berobat as $berobat) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $berobat->nik ?></td>
                                        <td><?php echo $berobat->nama_pasien_berobat ?></td>
                                        <td><?php echo $berobat->tinggi_badan ?></td>
                                        <td><?php echo $berobat->berat_badan ?></td>
                                        <td><?php echo $berobat->s?></td>
                                        <td><?php echo $berobat->o?></td>
                                        <td><?php echo $berobat->a?></td>
                                        <td><?php echo $berobat->p?></td>
                                        <td><?php echo $berobat->jenis_poli?></td>
                                        <td><?php echo $berobat->diagnosa?></td>
                                        <td><?php echo $berobat->jenis_obat?></td>
                                        <td><?php echo $berobat->pembayaran?></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <?php echo anchor('C_pasienumum/edit/'.$berobat->id_berobat,'Edit'); ?>
                                            <?php echo anchor('C_pasienumum/hapus/'.$berobat->id_berobat,'Hapus'); ?>          
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <!-- END Dynamic Table Full -->
            </div>
            <!-- END Page Content -->
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

    <!-- DataTables -->
        <script src="<?= base_url('');?>assets/oneui/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('');?>assets/oneui/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url('');?>assets/oneui/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('');?>assets/oneui/js/pages/be_tables_datatables.min.js"></script>            
</body>

</html>