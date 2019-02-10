<?php include('_header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<form method="POST" action="">
				<div class="form-group">
				<label>Procedure</label>
				<select name="proceduree" class="form-control" id="branch">
					<option name="" value="">Select Proceedure</option>
					<!-- //get the region where you work  -->
					<?php
					$rs3 = mysqli_query($con, "select * from procedures WHERE dept = '$dept' ORDER BY zita ASC")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs3))
					{
					   $procedure=$row['zita'];?>
					   <option name="<?php echo $procedure; ?>" value="<?php echo $procedure; ?>"><?php echo $procedure; ?></option>
					<?php }
					?>
				</select>
			</div>

			<div class="form-group">
					<br><br>
					<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Complete Order"  /> 
				</div>

			</div>
			</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>
</div>



<?php if(isset($_POST['submit'])){
	$proceduree = $_POST['proceduree'];
	$id = $_GET['id'];

	$proc_update = "UPDATE `orders` SET `proceduree`='$proceduree', `closed_by`='$username'  WHERE entry_id='$id'";
	$rs = mysqli_query($con, $proc_update); ?> 

	<script>
	       alert("Order details updated!");
	       location = 'index.php';
	      </script>
<?php } ?>

