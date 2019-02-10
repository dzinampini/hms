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
				<br><br>
				<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Check Balance"  /> 
			</div>
		</div>


		<div class="col-md-4">
		</div>

	</div>	
</div>
</form>

<?php 
if(isset($_POST['submit'])){

$hn = $_POST['hn']; 

 $total_orders=0;
 $total_pharmarcy =0;  
 $total_rec = 0; ?>



<div class="container">

	<h1 align="">Patient <?php echo $hn; ?> Hospital Bill</h1> 
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h2 align="">Bed Days</h2>

			<div class="table-responsive">
				<table class="table">
					
						
			<?php 

			 $rs2 = mysqli_query($con, "select * from opd_patients where opd_id = '$hn'  ")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs2)){
					   $outcome = $row['outcome']; 

					   $doa= $row['zuva']; 
					   $doo=$row['outcome_date']; 

						$date1=date_create($doa);
						$date2=date_create($doo);
						$diff=date_diff($date1,$date2);
						$bed_days = $diff->format("%a");

						$bed_bill = $bed_days*6; ?>

						<tr>
							<th>DATE OF ADMISSION</th>
							<th>DATE  <?php echo strtoupper($outcome); ?></th>
							<th>BED DAYS</th>
							<th>BEDDING BILL</th>
						</tr>

						<tr>
							<td><?php echo date("Y-m-d", strtotime($doa)); ?></td>
							<td><?php echo $doo; ?></td>
							<td><?php echo $bed_days.' days'; ?></td>
							<td><?php echo '$'.$bed_bill; ?></td>
						</tr>

					<?php } ?>
				</table>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>





	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h1>Other Procedures Performed</h1>
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>Procedure</th>
						<th>Cost</th>
					</tr>

			<?php $rs3 = mysqli_query($con, "select * from orders where hn = '$hn' AND closed_by <> ''  ")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs3)){
					  $proceduree = $row['proceduree']; 

					  //now get the proceeduree cost from the proceedurees table
					  $rs4 = mysqli_query($con, "select * from procedures where zita = '$proceduree'")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs4)){
					  $cost = $row['cost']; ?>

					  <tr>
					  	<td><?php echo $proceduree; ?></td>
					  	<td><?php echo '$'.$cost ?></td>
					  </tr> 

					  <?php $total_orders += $cost;
					}  } ?>

					<tr>
						<th>Total</th>
						<td><?php echo '$'.$total_orders; ?></td>
					</tr>
				</table>	
			</div>		  
		</div>
		<div class="col-md-2">
		</div>
	</div>







	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<?php $total_bill = $bed_bill + $total_orders; ?>

			<h1>Total Bill - <?php echo '$'.$total_bill; ?> </h1>

		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>


<div class="container">
	<h1>Payed Receipts</h1>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>Date</th>
						<th>Amount</th>
						<th>Receipt #</th>
					</tr>

					<?php $rs5 = mysqli_query($con, "select * from payments where hn = '$hn'  ")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs5)){
					  $zuva = $row['zuva']; 
					  $amount = $row['amount']; 
					  $receipt = $row['receipt']; 

					  if (strlen($receipt) == 1){
					  	$rec = '00000'.$receipt; 
					  }

					  else if (strlen($receipt) == 2){
					  	$rec = '0000'.$receipt; 
					  }

					  else if (strlen($receipt) == 3){
					  	$rec = '000'.$receipt; 
					  }

					  else if (strlen($receipt) == 4){
					  	$rec = '00'.$receipt; 
					  }

					  else if (strlen($receipt) == 5){
					  	$rec = '0'.$receipt; 
					  }

					  else {
					  	$rec = $receipt; 
					  } ?>




					<tr>
						<td><?php echo $zuva; ?></td>
						<td><?php echo $amount; ?></td>
						<td><?php echo 'A'.$rec; ?></td>
					</tr>

					<?php $total_rec += $amount; 
				} ?>
				

				<tr>
					<th>Total Payed</th>
					<th><?php echo '$'.$total_rec; ?></th>
				</tr>


				</table>
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>

	<h1>Balances</h1>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 table-responsive">
			<table class="table">
				<tr>
					<th>Total Bill</th>
					<th>Total Paid</th>
					<th>Balance</th>
				</tr>

				<tr>
					<td><?php echo '$'.$total_bill; ?></td>
					<td><?php echo '$'.$total_rec; ?></td>
					<td><?php echo '$'; echo $total_bill-$total_rec; ?></td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
		</div>
	</div>
</div>



<?php } ?>


