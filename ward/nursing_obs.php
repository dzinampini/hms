<?php include('_header.php'); ?>


<div class="container">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<form method="POST" action="">
				

				<div class="form-group">
					<label>Nursing Observations / History</label>
					<textarea name="obs" class="form-control" rows="6"></textarea>
				</div>


				<div class="form-group">
					<br><br>
					<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Add Observation/History"  /> 
				</div>
			</form>


		</div>
		<div class="col-md-3">
		</div>
	</div>
</div>


<?php 
if(isset($_POST['submit'])){


$obs = $_POST['obs'];
$id = $_GET['id']; 

$obs_insert = "INSERT INTO `observations` (`hn`, `obs`, `made_by`) VALUES ('$id', '$obs','$username')"; 

$rs = mysqli_query($con, $obs_insert); ?> 

<script>
       alert("Observation added successfully.");
       location = 'nursing_obs.php?id=<?php echo $id; ?>';
      </script>
<?php }
?>


}

