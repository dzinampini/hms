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
						<th>Outcome</th>
					</tr>



					<?php $rs2 = mysqli_query($con, "select * from opd_patients where outcome <> '' AND bill = '0'  ")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs2)){
					   $hn = $row['opd_id']; 
					   $surname=$row['surname'];
					   $fname=$row['fname'];
					   $age = $row['age']; 
					   $sex = $row['sex'];
					   $outcome = $row['outcome']; 
					   ?>
					<tr>
						<td><?php echo $hn; ?></td>
						<td><?php echo $surname; ?></td>
						<td><?php echo $fname; ?></td>
						<td><?php echo $age; ?></td>
						<td><?php echo $sex; ?></td>
						<td><?php echo $outcome; ?></td>
						<td><a href="bill_patient.php?id=<?php echo $hn; ?>">Bill Patient</a></td>

						<!-- <td><a href="view_patient.php?id=<?php  $hn; ?>">Nursing Observations</a></td> -->
						<!-- <td><a href="view_patient.php?id=<?php  $hn; ?>">Drug Chart</a></td> -->
						<!-- <td><a href="view_patient.php?id=<?php  $hn; ?>">Temperature Monitor</a></td> -->
						<!-- <td><a href="view_patient.php?id=<?php  $hn; ?>">Doctor's Orders</a></td> -->
					</tr>
					<?php } ?>

				</table>

		</div>

	</div>
</div>


