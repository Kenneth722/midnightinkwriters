	<div id="site-content">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-8 col-sm-12">
					<h1 class="text-dark" style="margin-top: 25%"><strong>Custom Payment</strong></h1>
					<p class="text-muted mt-3" style="margin-right: 3rem;">Use this page to process custom payments and transactions.</p>
				</div>
				<div class="col-md-4 col-sm-12">
					<hr class="mt-5 mb-5">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="form-label">Service Name</label>
								<input type="text" class="form-control" id="service_name" value="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="form-label">Price</label>
								<input type="number" class="form-control" id="price" value="">
								<label class="form-label mb-5">USD</label>
							</div>
						</div>
					</div>
					<div id="paypal-button-container"></div>
				</div>
			</div>
		</div>
	</div>

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

	<script src="https://www.paypal.com/sdk/js?client-id=Ae52rMSKh8DFtsu1i_2bgyw8fB_9Ay8GC8pyAtb0_Zw1CFcVB4mMiAsS5klVfj--3aLbwOhpM68LSNPF&currency=USD&intent=capture"></script>

	<script type="text/javascript">
		// var description = $('#service_name').val();
		// var price = $('#price').val();
		  paypal.Buttons({
		      createOrder: function (data, actions) {
		          return actions.order.create({
		              purchase_units: [{
		                  description: $('#service_name').val(),
		                  amount: {
		                      value: $('#price').val()
		                  }
		              }]
		          });
		      },
		      onApprove: function (data, actions) {
		          return actions.order.capture().then(function (details) {
		              alert('Transaction completed by ' + details.payer.name.given_name);
		          });
		      }
		  }).render('#paypal-button-container');
	</script>

	</body>
</html>