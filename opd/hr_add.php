<?php include('_header.php'); ?>

<form name="" method="POST" action="">

<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>First Name</label>
				<input name="fname" class="form-control" type="text" required>
			</div>

			<div class="form-group">
				<label>Last Name</label>
				<input name="surname" class="form-control" type="text" required>
			</div>

			<div class="form-group">
				<label>EC Number</label>
				<input name="staff_id" class="form-control" type="text" required>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Role</label>
				<select name="role" class="form-control">
					<option name="" value="">Select Role</option>
					<option name="nurse" value="nurse">Nurse</option>
					<option name="doctor" value="doctor">Doctor</option>
					<option name="gh" value="gh">General Hand</option>
					<option name="technician" value="technician">Technician</option>
				</select>
			</div>

			<div class="form-group">
				<label>Department</label>
				<select name="department" class="form-control" id="branch">
					<option name="" value="">Select Department/Ward</option>
					<!-- //get the region where you work  -->
					<?php
					$rs3 = mysqli_query($con, "select * from units ORDER BY zita ASC")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs3))
					{
					   $departments=$row['zita'];?>
					   <option name="<?php echo $departments; ?>" value="<?php echo $departments; ?>"><?php echo $departments; ?></option>
					<?php }
					?>
				</select>

			</div>

			<div class="form-group">
				<label>Contact Details</label>
				<input name="contact" class="form-control" type="text" required>
			</div>

			<div class="form-group">
				<br><br>
				<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Add Staff Member"  /> 
			</div>
		</div>


		<div class="col-md-2">
		</div>

		</div>
		</div>
		</div>
		</div>
	</div>
</div>
</form>

<?php 
if(isset($_POST['submit'])){


$fname = $_POST['fname'];
$surname = $_POST['surname'];
$staff_id = $_POST['staff_id'];
$role = $_POST['role'];
$department = $_POST['department'];
$contact = $_POST['contact'];
$password = rand(100000, 999999);

$staff_insert = "INSERT INTO `staff`(`staff_id`, `fname`, `surname`, `role`, `dept`,`contact`,`password`) VALUES ('$staff_id','$fname','$surname','$role','$department','$contact','$password')"; 

$rs = mysqli_query($con, $staff_insert); ?> 

<script>
       alert("Staff member added successfully. Staff Number - <?php echo $staff_id; ?> and password - <?php echo $password; ?>.");
       location = 'hr_add.php';
      </script>
<?php }
?>


}


