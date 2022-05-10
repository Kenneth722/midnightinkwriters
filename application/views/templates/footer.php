    

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/plugin/DataTables/datatables.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".subscriptionForm").on("click", ".pay-subscription", function () {
                $('#exampleModal').modal('show');
            })
        })
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#editable-1').DataTable();
        })
    </script>
    </body>
</html>