<div id="site-content" style="padding-top: 102px">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Register Author</div>
					</div>
					<form method="POST" action="authors/addNew">
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
										<script
						                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
						                data-key="pk_test_51Ko7tbDDDYQjuAYT9RSleqcLG4Lm9Rdu3AkLXAc6V269sK8D5zY7m79lcythrbZQ3mWAuCRMP09fqfAhSoGAMCAD007tOgi0D4"
						                data-locale="auto"
						                data-label="Proceed to Card Payment">
						                </script>
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