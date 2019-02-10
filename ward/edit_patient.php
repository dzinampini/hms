<?php include('_header.php'); ?>


<div class="container">
	<div class="row">

		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>Hospital Number</th>
						<th>Surname</th>
						<th>First Name</th>
						<th>Age</th>
						<th>Sex</th>
						<th>Diagnosis</th>
						<th>Nursing Obs</th>
						<!-- <th>Drug Chart</th> -->
						<th>Temp&amp;BP Monitors</th>
						<th>Doctor's Orders</th>
					</tr>



					<?php $rs2 = mysqli_query($con, "select * from opd_patients where action = '$ward' AND outcome=''  ")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs2)){
					   $hn = $row['opd_id']; 
					   $surname=$row['surname'];
					   $fname=$row['fname'];
					   $age = $row['age']; 
					   $sex = $row['sex'];
					   $imp = $row['imp']; 
					   ?>
					<tr>
						<td><?php echo $hn; ?><?php echo date('/y'); ?></td>
						<td><?php echo $surname; ?></td>
						<td><?php echo $fname; ?></td>
						<td><?php echo $age; ?></td>
						<td><?php echo $sex; ?></td>
						<td><?php echo $imp; ?></td>


						<td><a href="nursing_obs.php?id=<?php echo $hn; ?>"><i class="fa fa-edit"></i></a></td>
						<!-- <td><a href="drug_chart.php?id=<?php //echo $hn; ?>"><i class="fa fa-edit"></i></a></td> -->
						<td><a href="monitors.php?id=<?php echo $hn; ?>"><i class="fa fa-edit"></i></a></td>
						<td><a href="orders.php?id=<?php echo $hn; ?>"><i class="fa fa-edit"></i></a></td>
					</tr>
					<?php } ?>

				</table>

		</div>

	</div>
</div>


