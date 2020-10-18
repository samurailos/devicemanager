<?php $this->load->view('includes/header');?>
<div class="container">
	<br>
	<br>
	<div class="container">


	</div>
		<form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
			<div class="form-group">
				<label for="exampleInputEmail1">Make</label>
				<input type="text" class="form-control" name="make" value="<?php echo $row->make; ?>"aria-describedby="emailHelp" placeholder="Enter make of device">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Model</label>
				<input type="text" class="form-control" name="model" value="<?php echo $row->model; ?>"aria-describedby="emailHelp" placeholder="Enter model of device">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Device Type</label>
				<input type="text" class="form-control" name="deviceType" value="<?php echo $row->deviceType; ?>"aria-describedby="emailHelp" placeholder="Enter device type">
			</div><div class="form-group">
				<label for="exampleInputEmail1">Imei:</label>
				<input type="text" class="form-control" name="imeiSerialno" value="<?php echo $row->imeiSerialno; ?>"aria-describedby="emailHelp" placeholder="Enter imei or serial number">
			</div><div class="form-group">
				<label for="exampleInputEmail1">OS Version</label>
				<input type="text" class="form-control" name="osVersion" value="<?php echo $row->osVersion; ?>"aria-describedby="emailHelp" placeholder="Enter OS version">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Assigned to:</label>
				<input type="text" class="form-control" name="assignedTo" value="<?php echo $row->assignedTo; ?>"aria-describedby="emailHelp" placeholder="Enter assigned to">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Service Vehicle</label>
				<input type="text" class="form-control" name="serviceVehicle" value="<?php echo $row->serviceVehicle; ?>"aria-describedby="emailHelp" placeholder="Enter service vehicle">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Date Assigned</label>
				<input type="date" class="form-control" name="dateAssigned" value="<?php echo $row->dateAssigned; ?>"aria-describedby="emailHelp" placeholder="Enter date assigned">
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">Status</label>
				<select id="status_id" class="form-group">
					<option value="">Select</option>
					<option value="1">Active</option>
					<option value="2">Inactive</option>
				</select>
			</div>

			<button type="submit" class="btn btn-primary" value="save">Submit</button>
			<a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
		</form>
	</div>

	</body>
</html>
