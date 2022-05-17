<div id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card">
					<div class="card-header bg-purple text-white">
						<div class="card-title">
							<h4 class="mt-1">My Services</h4>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-responsive" id="editable-1">
							<thead>
								<tr>
									<th>ID</th>
									<th>Service Name</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($my_services as $service) { ?>
									<tr>
										<td><?php echo $service->id ?></td>
										<td><?php echo $this->service_model->getServiceById($service->service_id)->display_name; ?></td>
										<td><?php echo $service->status ?></td>
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