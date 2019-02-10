<?php include('_header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form class="" method="POST" action="">
				<div class="form-group">
					<label>Procedure</label>
					<input name="proceduree" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Cost</label>
					<input name="cost" class="form-control" min="0" step="0.01" type="number">
				</div>

				<div class="form-group">
					<br><br>
					<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Add Order"  /> 
				</div>
			</form>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>


<?php 
if(isset($_POST['submit'])){


$proceduree = $_POST['proceduree']; 
$cost = $_POST['cost'];

$proc_insert = "INSERT INTO `procedures`(`zita`, `dept`, `cost`) VALUES ('$proceduree','$dept','$cost')"; 

$rs = mysqli_query($con, $proc_insert); ?> 

<script>
       alert("Procedure added successfully.");
       location = 'add_procedure.php';
      </script>
<?php }
?>


}

