<?php include('_header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form name="" method="POST" action="">
				<div class="form-group">
					<label>Temperature</label>
					<input name="temp" type="number" step="0.01" class="form-control">
				</div>

				<div class="form-group">
					<label>BP</label>
					<input name="bp" class="form-control" placeholder="Eg. 120/80" maxlength="7" >
				</div>

				<div class="form-group">
					<label>HIV Status</label>
          <select name="hiv" class="form-control">
            <option value="Code 0">Code 0</option>
            <option value="Code 1">Code 1</option>
            <option value="Unknown">Unknown</option>
          </select>
				</div>


        <div class="form-group">
          <label>Weight</label>
          <input name="weight" type="number" min="1" step="0.01" class="form-control">
        </div>

				<div class="form-group">
					<br><br>
					<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Update Observations"  /> 
				</div>


			</form>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>

<?php if(isset($_POST['submit'])){
	$temp = $_POST['temp']; 
	$bp = $_POST['bp'];
	$hiv = $_POST['hiv']; 
  $weight = $_POST['weight']; 
	$id = $_GET['id'];

	$obs_update = "UPDATE `opd_patients` SET `temp`='$temp',`bp`='$bp',`hiv`='$hiv',`weight`='$weight' WHERE opd_id='$id'";
	$rs = mysqli_query($con, $obs_update); ?> 

	<script>
	       alert("Observations updated. Patient can now move to Consultation Room");
	       location = 'observations.php';
	      </script>
<?php } ?>