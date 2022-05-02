<div id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card">
					<div class="card-header bg-purple text-white">
						<div class="card-title">
							<h4 class="mt-1">Services List</h4>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-responsive" id="editable-1">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Price</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($services as $service) { ?>
									<tr>
										<td><?php echo $service->id ?></td>
										<td><?php echo $service->name ?></td>
										<td><?php echo $service->price ?></td>
										<td></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>