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

<script src="https://www.paypal.com/sdk/js?client-id=AUIQuS9BPZThHVpJUFc3aMTkkcNZMzK3Dmz3GgL7fqx5A3vrjFDKYlveQQfGqHFKGHvOKQfk_D4iquBF&currency=USD&intent=capture"></script>

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
          });
      }
  }).render('#paypal-button-container');
</script>