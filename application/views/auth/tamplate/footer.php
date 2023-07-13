<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?= base_url() ?>assets/vendor/intl-tel-input-master/build/js/intlTelInput.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script src="<?= base_url() ?>assets/js/main.js"></script>


<!-- AUTO NUMERIC -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/1.8.2/autoNumeric.js"></script>

<?php
if (isset($extra)) {
    $this->load->view($extra);
}
?>

<script>
    $(".money-input").autoNumeric('init', {
        aSep: ',',
        aDec: '.',
        aForm: true,
        vMax: '99999999999.99',
        vMin: '0.00'
    });
</script>

</body>

</html>