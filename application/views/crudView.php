<?php $this->load->view('includes/header');?>

	<div class="container">
		<br>
		<br>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			ADD DEVICE
		</button>
		<br>
		<br>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Enter Information</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<form method="post" action="<?php echo site_url('CrudController/create')?>">
							<div class="form-group">
								<label for="exampleInputEmail1">Make</label>
								<input type="text" class="form-control" name="make" aria-describedby="emailHelp" placeholder="Enter make of device">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Model</label>
								<input type="text" class="form-control" name="model" aria-describedby="emailHelp" placeholder="Enter device model">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Device Type</label>
								<input type="text" class="form-control" name="deviceType" aria-describedby="emailHelp" placeholder="Enter Phone or Tablet as type">
							</div><div class="form-group">
								<label for="exampleInputEmail1">Imei:</label>
								<input type="text" class="form-control" name="imeiSerialno" aria-describedby="emailHelp" placeholder="Enter imei or serial number">
							</div><div class="form-group">
								<label for="exampleInputEmail1">OS Version</label>
								<input type="text" class="form-control" name="osVersion" aria-describedby="emailHelp" placeholder="Enter OS version">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Assigned to:</label>
								<input type="text" class="form-control" name="assignedTo" aria-describedby="emailHelp" placeholder="Enter to who or where device is assigned">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Service Vehicle</label>
								<input type="text" class="form-control" name="serviceVehicle" aria-describedby="emailHelp" placeholder="Enter service vehicle reg plate no.">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Date Assigned:</label>
								<input type="date" class="form-control" name="dateAssigned" aria-describedby="emailHelp" placeholder="Enter date device was assigned">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Status:</label>
								<select id="status_id" name="status_id" class="form-group">
									<option value="">Select</option>
									<option value="1">Active</option>
									<option value="2">Inactive</option>
								</select>
							</div>


							<button type="submit" class="btn btn-primary" value="save">Submit</button>
						</form>
					</div>
					</div>
			</div>
		</div>



		<table class="table">
			<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Make</th>
				<th scope="col">Model</th>
				<th scope="col">Device Type</th>
				<th scope="col">Imei.</th>
				<th scope="col">OS Version</th>
				<th scope="col">Assigned to:</th>
				<th scope="col">Service Vehicle</th>
				<th scope="col">Date Assigned:</th>
				<th scope="col">Actions</th>
				<th scope="col">Status:</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach($result as $row){?>
			<tr>
				<th scope="row"><?php echo $row->id; ?></th>
				<td><?php echo $row->make; ?></td>
				<td><?php echo $row->model; ?></td>
				<td><?php echo $row->deviceType; ?></td>
				<td><?php echo $row->imeiSerialno; ?></td>
				<td><?php echo $row->osVersion; ?></td>
				<td><?php echo $row->assignedTo; ?></td>
				<td><?php echo $row->serviceVehicle; ?></td>
				<td><?php echo $row->dateAssigned; ?></td>
				<td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>">Edit</a>  |
					<a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>">Delete</a> </td>
				<td><?php echo $row->status_id; ?></td>
				</tr>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>
