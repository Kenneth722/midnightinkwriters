<div id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card">
					<div class="card-header bg-purple text-white">
						<div class="card-title">
							<h4 class="mt-1">List of Authors</h4>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-responsive" id="editable-1">
							<thead>
								<tr>
									<th>id</th>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($authors as $author) { 
									$name = $author->firstname . ' ' . $author->middlename . ' ' . $author->lastname;
								?>
									<tr>
										<td><?php echo $author->id ?></td>
										<td><?php echo $name ?></td>
										<td><?php echo $this->author_model->getAuthorbyIonId($author->ion_user_id)->email ?></td>
										<td><?php echo $author->address ?></td>
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