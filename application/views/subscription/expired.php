<div id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card">
					<div class="card-header bg-purple text-white">
						<div class="card-title">
							<h5><center>Subscription Renewal</center></h5>
						</div>
					</div>
					<div class="card-body">
						<input type="hidden" name="id" id="author_id" value="<?php echo $this->ion_auth->get_user_id(); ?>">
						<center><div id="paypal-button-container"></div></center>
					</div>
				</div>
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

    <script src="https://www.paypal.com/sdk/js?client-id=AUIQuS9BPZThHVpJUFc3aMTkkcNZMzK3Dmz3GgL7fqx5A3vrjFDKYlveQQfGqHFKGHvOKQfk_D4iquBF&currency=USD&intent=capture"></script>

	<script type="text/javascript">
		var description = "Subscription";
	  	var price = 9.99;

		paypal.Buttons({
	      createOrder: function (data, actions) {
	          return actions.order.create({
	              purchase_units: [{
	                  description: description,
	                  amount: {
	                      value: price
	                  }
	              }]
	          });
	      },
	      onApprove: function (data, actions) {
	          return actions.order.capture().then(function (details) {
	          	  var id = $('#author_id').val();
	              alert('Transaction completed by ' + details.payer.name.given_name);
	              $.ajax({
	              	url: 'authors/subscriptionRenewal?id='+id,
	              	method: 'GET',
	              	data: '',
	              	dataType: 'json',
	              	success: function(response) {
	              		alert(response.message);
	              	}
	              });
	          });
	      },
	      onError: (err) => {
	        console.error(
	          'An error prevented the buyer from checking out with PayPal',
	        )
	      },
	  }).render('#paypal-button-container');
	</script>

    </body>
</html>