<div id="site-content">
	<div class="container">
		<h2>Add Services</h2>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card bg-purple text-white">
					<form method="POST" action="services/addNew">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<div class="form-group">
										<label class="form-label">Name: </label>
										<input type="text" name="name" class="form-control" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-6">
									<div class="form-group">
										<label class="form-label">Price: </label>
										<input type="number" name="price" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<div class="form-group">
										<label class="form-label">Description: </label>
										<textarea class="form-control" name="description" required></textarea>
									</div>
								</div>
								<div class="col-sm-12 col-md-6">
									<div class="form-group">
										<label class="form-label">Sub Description: </label>
										<textarea class="form-control" name="sub_description" required></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<div class="form-group">
										<label class="form-label">What You'll Get Description: </label>
										<textarea class="form-control" name="receive_description" required></textarea>
									</div>
								</div>
								<div class="col-sm-12 col-md-6">
									<div class="form-group">
										<label class="form-label">How to Use Description: </label>
										<textarea class="form-control" name="use_description" required></textarea>
									</div>
								</div>
							</div>
							<div class="row mt-5">
								<div class="col-sm-12 col-md-12">
									<div class="form-group float-end">
										<button class="btn btn-success" type="submit">Add New</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>