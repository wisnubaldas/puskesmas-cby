<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pasien BPJS</title>
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
    <link rel="stylesheet" id="css-main" href="<?= base_url(''); ?>assets/oneui/css/oneui.min.css">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
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
                            <h1 class="font-w600 text-white mb-2 invisible" data-toggle="appear">Pasien BPJS </h1>
                        </div>
                        <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                            <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                                <?php
                                if ($login == 'admin') { ?>
                                    <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="<?= base_url('C_dashboard'); ?>">
                                        <i class="si si-home"></i> Kembali
                                    </a>
                                <?php } ?>
                                <?php
                                if ($login == 'poligigi') { ?>
                                    <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="<?= base_url('gigi/C_dashgigi'); ?>">
                                        <i class="si si-home"></i> Kembali
                                    </a>
                                <?php } ?>
                                <?php
                                if ($login == 'klinikumum') { ?>
                                    <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="<?= base_url('umum/C_dashumum'); ?>">
                                        <i class="si si-home"></i> Kembali
                                    </a>
                                <?php } ?>
                                <?php
                                if ($login == 'klinikkia') { ?>
                                    <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="<?= base_url('kia/C_dashkia'); ?>">
                                        <i class="si si-home"></i> Kembali
                                    </a>
                                <?php } ?>
                                <?php
                                if ($login == 'klinikgizi') { ?>
                                    <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="<?= base_url('gizi/C_dashgizi'); ?>">
                                        <i class="si si-home"></i> Kembali
                                    </a>
                                <?php } ?>
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
                    <form action="" method="GET">
                        <div class="input-group">
                            <input type="date" name="tgl_berobat" class="form-control ml-3">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" value="Cari">Cari</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Dynamic Table Full -->
            <div class="block">
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-responsive table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
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
                                <th>Hasil Lab</th>
                                <th>Rujukan</th>
                                <th>Resep Obat</th>
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
                                    <td><?php echo $berobat['tgl_berobat'] ?></td>
                                    <td><?php echo $berobat['nik'] ?></td>
                                    <td><?php echo $berobat['nama_pasien_berobat'] ?></td>
                                    <td><?php echo $berobat['tinggi_badan'] ?></td>
                                    <td><?php echo $berobat['berat_badan'] ?></td>
                                    <td><?php echo $berobat['s'] ?></td>
                                    <td><?php echo $berobat['o'] ?></td>
                                    <td><?php echo $berobat['a'] ?></td>
                                    <td><?php echo $berobat['p'] ?></td>
                                    <td><?php echo $berobat['jenis_poli'] ?></td>
                                    <td><?php echo $berobat['diagnosa'] ?></td>
                                    <td>
                                        <?php if ($berobat['hasil_lab'] != '-') { ?>
                                            <a href="<?= base_url('') ?>/assets/file_upload/<?php echo $berobat['hasil_lab'] ?>" class="btn btn-success">Download</a>
                                        <?php } else { ?>
                                            <?php echo $berobat['hasil_lab'] ?>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $berobat['rujukan'] ?></td>
                                    <td><?php echo $berobat['jenis_obat'] ?></td>
                                    <td>
                                        <div class="btn btn-group">
                                            <a href="<?= base_url('C_bpjs/edit/' . $berobat['id_berobat'],) ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?= base_url('C_bpjs/hapus/' . $berobat['nik']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                            <a href="<?= base_url('C_bpjs/print/' . $berobat['nik']) ?>" class="btn btn-success btn-sm" target="_blank">Print</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
                <!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Data</h4>
                                    </div>
                                    <form class="form-horizontal" action="<?php echo base_url('admin/tambah') ?>" method="post" enctype="multipart/form-data" role="form">
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Diagnosa</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="diagnosa" placeholder="Diagnosa">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Resep Obat</label>
                                                <div class="col-lg-10">
                                                <textarea class="form-control" name="jenis_obat" placeholder="Resep Obat"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Aksi</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="aksi" placeholder="Aksi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->
            </div>
            <!-- END Dynamic Table Full -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
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

    <!-- DataTables -->
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(''); ?>assets/oneui/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(''); ?>assets/oneui/js/pages/be_tables_datatables.min.js"></script>
</body>

</html>