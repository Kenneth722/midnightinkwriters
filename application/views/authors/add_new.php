<div id="site-content" style="padding-top: 102px">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Register Author</div>
					</div>
					<form method="POST" class="subscriptionForm" action="authors/addNew">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label class="form-label">First Name</label>
										<input type="text" name="f_name" class="form-control" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label class="form-label">Middle Name</label>
										<input type="text" name="m_name" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label class="form-label">Last Name</label>
										<input type="text" name="l_name" class="form-control" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label class="form-label">Email</label>
										<input type="text" name="email" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label class="form-label">Password</label>
										<input type="password" name="password" class="form-control" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label class="form-label">Address</label>
										<input type="text" name="address" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="row">
								<input type="hidden" name="sub_price" value="<?php echo $subscription_price ?>">
								<input type="hidden" name="sub_type" value="<?php echo $subscription_type ?>">
							</div>
							<div class="row mt-3">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<!-- <script
						                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
						                data-key="pk_test_51Ko7tbDDDYQjuAYT9RSleqcLG4Lm9Rdu3AkLXAc6V269sK8D5zY7m79lcythrbZQ3mWAuCRMP09fqfAhSoGAMCAD007tOgi0D4"
						                data-locale="auto"
						                data-label="Proceed to Card Payment">
						                </script>
						                <div id="paypal-button-container"></div> -->
						        <button type="button" class="btn btn-primary pay-subscription" data-bs-toggle="modal">
										  Submit
										</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subscription Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="paypal-button-container"></div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=AUIQuS9BPZThHVpJUFc3aMTkkcNZMzK3Dmz3GgL7fqx5A3vrjFDKYlveQQfGqHFKGHvOKQfk_D4iquBF&currency=USD&intent=capture"></script>

<script type="text/javascript">
	var description = "Subscription";
  var price = "<?php echo $subscription_price ?>";

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
  }).render('#paypal-button-container');
</script>

<!-- <script type="text/javascript">
    var description = "Subscription";
    var price = "<?php echo $subscription_price ?>";
    var FUNDING_SOURCES = [
	    paypal.FUNDING.PAYPAL,
	    // paypal.FUNDING.VENMO,
	    // paypal.FUNDING.PAYLATER,
	    // paypal.FUNDING.CREDIT,
	    paypal.FUNDING.CARD
	];
	FUNDING_SOURCES.forEach(function(fundingSource) {

	    // Initialize the buttons
	    var button = paypal.Buttons({
	        fundingSource: fundingSource,
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
	    });

	    // Check if the button is eligible
	    if (button.isEligible()) {

	        // Render the standalone button for that funding source
	        button.render('#paypal-button-container');
	    }
	});
</script> -->