<div id="site-content">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-8 col-sm-12">
				<h1 class="text-dark"><strong><?php echo $service->name ?></strong></h1>
				<img class="mt-5" src="assets/img/fanbaseboost.jpg" alt="" style="border-radius: 2%">
				<p class="text-muted mt-3" style="margin-right: 3rem;"><?php echo $service->sub_description ?></p>
        <p class="text-dark h4"><strong>What you'll get</strong></p>
        <p><?php echo $service->receive_description ?></p>
        <p class="text-dark h4"><strong>How it works</strong></p>
        <p><?php echo $service->use_description ?></p>
			</div>
			<div class="col-md-4 col-sm-12">
				<p class="text-dark h5"><strong>Description</strong></p>
				<p class="text-muted"><?php echo $service->description ?></p>
				<hr class="mt-5 mb-5">
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

	<!-- <script>
	  const fundingSources = [
	    paypal.FUNDING.PAYPAL,
	      paypal.FUNDING.VENMO,
	      paypal.FUNDING.PAYLATER,
	      paypal.FUNDING.CARD
	    ]

	  for (const fundingSource of fundingSources) {
	    const paypalButtonsComponent = paypal.Buttons({
	      fundingSource: fundingSource,

	      // optional styling for buttons
	      // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
	      style: {
	      	layout: 'vertical',
	        shape: 'rect',
	        
	      },

	      // set up the transaction
	      createOrder: (data, actions) => {
	        // pass in any options from the v2 orders create call:
	        // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
	        const createOrderPayload = {
	          purchase_units: [
	            {
	              amount: {
	                value: '88.44',
	              },
	            },
	          ],
	        }

	        return actions.order.create(createOrderPayload)
	      },

	      // finalize the transaction
	      onApprove: (data, actions) => {
	        const captureOrderHandler = (details) => {
	          const payerName = details.payer.name.given_name
	          console.log('Transaction completed!')
	        }

	        return actions.order.capture().then(captureOrderHandler)
	      },

	      // handle unrecoverable errors
	      onError: (err) => {
	        console.error(
	          'An error prevented the buyer from checking out with PayPal',
	        )
	      },
	    })

	    if (paypalButtonsComponent.isEligible()) {
	      paypalButtonsComponent
	        .render('#paypal-button-container')
	        .catch((err) => {
	          console.error('PayPal Buttons failed to render')
	        })
	    } else {
	      console.log('The funding source is ineligible')
	    }
	  }
	</script> -->

	<script type="text/javascript">
	  var description = "<?php echo $service->name ?>";
	  var price = "<?php echo $service->price ?>";
	  var service_id = "<?php echo $service->id ?>";
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
	              alert('Transaction completed by ' + details.payer.name.given_name);
	          });
	      }
	  }).render('#initial-paypal-button-container');
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
	              alert('Transaction completed by ' + details.payer.name.given_name);
	              $.ajax({
	              	url: 'services/addAuthorServiceByJson?id='+service_id,
	              	method: 'GET',
	              	data: '',
	              	dataType: 'json',
	              	success: function(response) {
	              		alert(response.details);
	              	}
	              });
	          });
	      }
	  }).render('#paypal-button-container');
	</script>

	</body>
</html>