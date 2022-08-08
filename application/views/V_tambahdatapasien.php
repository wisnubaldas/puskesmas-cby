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
    <link rel="shortcut icon" href="<?= base_url('assets/images/icon.png') ?>">
    <!-- <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/images/Logo_Bidan_Nyimas-3.png') ?>"> -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/Logo_Bidan_Nyimas-3.png') ?>"> -->
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="<?= base_url('assets/oneui/css/oneui.min.css') ?>">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/oneui/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/oneui/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/oneui/js/plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/oneui/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/oneui/js/plugins/dropzone/dist/min/dropzone.min.css') ?>">
</head>

<body>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image overflow-hidden" style="background-image: url('<?= base_url('assets/images/nakes.jpg') ?>');">
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
                    <div class="block-content block-content-full">

                    <?php echo form_open('C_tambahdatapasien/tambah',['enctype'=>'multipart/form-data']); ?>
                            <div class="row push">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="no_kk">Nomor Kartu Keluarga</label>
                                        <input type="text" class="form-control form-control-sm" id="no_kk" name="no_kk" placeholder="Nomor Kartu Keluarga">
                                        <?= form_error('no_kk', '<span class="error text-danger font-italic text-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                                        <input type="text" class="form-control form-control-sm" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" >
                                        <?= form_error('nik', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_bpjs">Nomor BPJS (jika ada)</label>
                                        <input type="text" class="form-control form-control-sm" id="no_bpjs" name="no_bpjs" placeholder="Nomor BPJS (jika ada)">
                                        <?= form_error('no_bpjs', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <hr />
                                    <div class="form-group">
                                        <label for="nama_pasien">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-sm" id="nama_pasien" name="nama_pasien" placeholder="Nama Lengkap" >
                                        <?= form_error('nama_pasien', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="umur_pasien">Umur</label>
                                        <input type="text" class="form-control form-control-sm" id="umur_pasien" name="umur_pasien" placeholder="Umur" >
                                        <?= form_error('umur_pasien', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir (kota)</label>
                                        <input type="text" class="form-control form-control-sm" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir (kota)" >
                                        <?= form_error('tempat_lahir', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir_pasien">Tanggal Lahir</label>
                                        <input type="date" class="form-control form-control-sm" id="tgl_lahir_pasien" name="tgl_lahir_pasien" placeholder="Tanggal Lahir">
                                        <?= form_error('tgl_lahir_pasien', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control form-control-sm"  id="username" name="username"  >
                                        <?= form_error('username', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control form-control-sm" id="password" name="password" placeholder="password" >
                                        <?= form_error('password', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" placeholder="Alamat">
                                        <?= form_error('alamat', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No. Hp</label>
                                        <input type="text" class="form-control form-control-sm" id="no_hp" name="no_hp" placeholder="No. Hp">
                                        <?= form_error('no_hp', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-select">Jenis Kelamin</label>
                                        <select class="form-control form-control-sm" id="gender" name="gender" >
                                            <option disabled>Pilih Jenis Kelamin</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        <?= form_error('gender', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tinggi_badan">Tinggi Badan</label>
                                        <input type="number" class="form-control form-control-sm" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi Badan (cm)" >
                                        <?= form_error('tinggi_badan', '<span class="error text-danger font-italic">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="berat_badan">Berat Badan</label>
                                        <input type="number" class="form-control form-control-sm" id="berat_badan" name="berat_badan" placeholder="Berat Badan (Kg)" >
                                        <?= form_error('berat_badan', '<span class="error text-danger font-italic text-italic">', '</span>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Daftar</button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
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
    
    <script src="<?= base_url('assets/oneui/js/oneui.core.min.js') ?>"></script>
    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="<?= base_url('assets/oneui/js/oneui.app.min.js') ?>"></script>
    <!-- Page JS Plugins -->
    <script src="<?= base_url('assets/oneui/js/plugins/chart.js/Chart.bundle.min.js') ?>"></script>
    <!-- Page JS Code -->
    <script src="<?= base_url('assets/oneui/js/pages/be_pages_dashboard.min.js') ?>"></script>
    <script src="<?= base_url('assets/oneui/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/oneui/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/oneui/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') ?>"></script>
    <script src="<?= base_url('assets/oneui/js/plugins/select2/js/select2.full.min.js') ?>"></script>
    <script src="<?= base_url('assets/oneui/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') ?>"></script>
    <script src="<?= base_url('assets/oneui/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') ?>"></script>
    <script src="<?= base_url('assets/oneui/js/plugins/dropzone/dropzone.min.js') ?>"></script>
    <script>
        jQuery(function() {
            One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);
        });
    </script>
</body>

</html>