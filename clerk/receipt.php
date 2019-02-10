<?php include('_header.php'); ?>

<form name="" method="POST" action="">

<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Hospital Number</label>
				<input name="hn" class="form-control" type="text" required>
			</div>

			<div class="form-group">
				<label>Amount</label>
				<input name="amount" class="form-control" type="number" required>
			</div>
			<div class="form-group">
				<br><br>
				<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Record Payment"  /> 
			</div>
		</div>


		<div class="col-md-4">
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


$hn = $_POST['hn'];
$amount = $_POST['amount'];

$rec_insert = "INSERT INTO `payments`(`hn`, `amount`) VALUES ('$hn','$amount')"; 

$rs = mysqli_query($con, $rec_insert); ?> 

<script>
       alert("Receipt done");
       location = 'receipt.php';
      </script>
<?php }
?>


}


