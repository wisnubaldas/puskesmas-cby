<!doctype html>
<html lang="en">

<head>
    <?php include APPPATH.'/views/layout/header.php' ?>
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
                            <h1 class="font-w600 text-white mb-2 " data-toggle="appear" data-timeout="250">Pendaftaran Berobat</h1>
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
                        <form action="<?= base_url('C_daftarberobat/daftar'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="row push">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="nik">Cari Pasien Berdasarkan NIK</label>
                                        <input type="text" class="form-control" id="autocomplete" name="nik" placeholder="Nomor Induk Kependudukan" required>
                                        <style>
                                        .autocomplete-suggestions { border: 1px solid #999; background: #FFF; overflow: auto; cursor:pointer;}
                                        .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
                                        .autocomplete-selected { background: #F0F0F0; }
                                        .autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
                                        .autocomplete-group { padding: 2px 5px; }
                                        .autocomplete-group strong { display: block; border-bottom: 1px solid #000; }
                                        </style>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-xl-5">
                                    <div class="form-group">
                                        <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pasien_berobat">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_pasien_berobat" name="nama_pasien_berobat" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="s">S</label>
                                        <input type="text" class="form-control" id="s" name="s" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="o">O</label>
                                        <input type="text" class="form-control" id="o" name="o" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="a">A</label>
                                        <input type="text" class="form-control" id="a" name="a" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="p">P</label>
                                        <input type="text" class="form-control" id="p" name="p" required>
                                    </div>
                                    <div>
                                        <label for="tgl_berobat">Tanggal Berobat</label>
                                        <input type="date" class="form-control" id="tgl_berobat" name="tgl_berobat" placeholder="Tanggal Berobat">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-select">Jenis Pembayaran</label>
                                        <select class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" required>
                                            <option disabled>Pilih Jenis Pembayaran</option>
                                            <option>Umum</option>
                                            <option>BPJS</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-select">Jenis Poli</label>
                                        <select class="form-control" id="jenis_poli" name="jenis_poli" required>
                                            <option disabled>Pilih Jenis Poli</option>
                                            <option>Klinik Umum</option>
                                            <option>KIA KB</option>
                                            <option>BP Gigi</option>
                                            <option>Klinik Gizi</option>
                                            <option>Rawat Inap</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Daftar</button>
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
    <?php include APPPATH.'/views/layout/footer.php' ?>
    <script>
        jQuery(function(){
            $('#autocomplete').autocomplete({
                serviceUrl: base_url+'/C_daftarberobat/get_nik',
                transformResult: function(response) {
                    let x = $.map(JSON.parse(response),function(d){
                        return { value: d.nama_pasien, data: d.no_kk };
                    })
                    return {
                        suggestions:x
                    };
                },
                onSelect: function (s) {
                   $('#nama_pasien_berobat').val(s.value)
                   $('#nik').val(s.data)
                }
            });
        })
    </script>
</body>

</html>