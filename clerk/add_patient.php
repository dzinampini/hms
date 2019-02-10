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
				<label>Age</label>
				<input name="age" type="number" min="0" max="150" class="form-control" required>
			</div>

			
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Sex</label>
				<select name="sex" class="form-control">
					<option name="male" value="male">Male</option>
					<option name="female" value="female">Female</option>
				</select>
			</div>

			<div class="form-group">
				<label>Payment Method</label>
				<select name="pmethod" class="form-control">
					<option name="" value="">Select Payment</option>
					<option name="pp" value="pp">Paying Patient</option>
					<option name="npp" value="npp">Non Paying Patient</option>
					<option name="ma" value="ma">Medical Aid</option>
				</select>
			</div>

			<div class="form-group">
				<label>Receipt # / Medical Aid #/ Reason for not paying</label>
				<input name="rec_receipt" class="form-control" required>
			</div>

			

			<div class="form-group">
				<br><br>
				<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Record Patient"  /> 
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
$age = $_POST['age'];
$sex = $_POST['sex'];
$pmethod = $_POST['pmethod'];
$rec_receipt = $_POST['rec_receipt'];

$patient_insert = "INSERT INTO `opd_patients`(`fname`, `surname`, `age`, `sex`, `pmethod`, `rec_receipt`) VALUES ('$fname','$surname','$age','$sex','$pmethod','$rec_receipt')"; 

$rs = mysqli_query($con, $patient_insert); ?> 

<script>
       alert("Patient can now move to observations desk.");
       location = 'add_patient.php';
      </script>
<?php }
?>


}


