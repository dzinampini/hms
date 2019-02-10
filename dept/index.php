<?php include('_header.php'); ?>


<div class="container">
	<div class="row">
		<div class="col-md-3">
		</div>

		<div class="col-md-6">
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>Hospital Number</th>
						<th>Order</th>
					</tr>



					<?php $rs2 = mysqli_query($con, "select * from orders where closed_by = '' AND department = '$dept'  ")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs2)){
					   $orderr=$row['orderr'];
					   $hn = $row['hn']; 
					   $entry_id = $row['entry_id']; 
					   ?>
					<tr>
						<td><?php echo $hn; ?></td>
						<td><?php echo $orderr; ?></td>
						<td><a href="process_order.php?id=<?php echo $entry_id; ?>">Process Order</a></td>
					</tr>
					<?php } ?>

				</table>

		</div>

		<div class="col-md-3">
		</div>
	</div>
</div>


