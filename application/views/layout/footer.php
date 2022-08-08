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
<script src="<?= base_url('assets/js/autocomplete.js') ?>"></script>

<script>
    var base_url = "<?= base_url(); ?>"
    jQuery(function() {
        One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);
    });
</script>