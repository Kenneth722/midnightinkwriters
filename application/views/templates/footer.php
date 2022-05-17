    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">

          <div class="container">

            <div class="row  justify-content-center">
              <div class="col-lg-6">
                <h3>Contact Us</h3>
                <!-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> -->
              </div>
            </div>

            <div class="row footer-newsletter justify-content-center">
              <!-- <div class="col-lg-6">
                <form action="" method="post">
                  <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
                </form>
              </div> -->
              <div class="col-md-6 col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-4">
                                  <i class="bi bi-telephone text-purple" style="font-size:72px;"></i>
                              </div>
                              <div class="col-md-8" style="text-align: left;">
                                  <h4 style="font-weight: bold;" class="text-purple">Contact</h4>
                                  <h6 class="mb-1">+19177253258</h6>
                                  <h6 class="mb-1">support@midnightinkwriters.com</h6>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-4">
                                  <i class="bi bi-globe text-purple" style="font-size:72px;"></i>
                              </div>
                              <div class="col-md-8" style="text-align: left;">
                                  <h4 style="font-weight: bold;" class="text-purple">Address</h4>
                                  <h6 class="mb-1">120 South Columbus Avenue, Mount Vernon, New York, NY 105503 United States</h6>
                                  <!-- <h6 class="mb-1">support@midnightinkwriters.com</h6> -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>
        </div>

        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>MidnightInkWriters</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
    </footer><!-- End Footer -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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