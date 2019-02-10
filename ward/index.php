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
						<th>Impression</th>
					</tr>



					<?php $rs2 = mysqli_query($con, "select * from opd_patients where action = '$ward' AND outcome = ''  ")or die(mysqli_error($con));

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
            <td><a href="create_order.php?id=<?php echo $hn; ?>">Doctor's Orders</a></td>
						<td><a href="view_patient.php?id=<?php echo $hn; ?>">Patient Notes</a></td>
						<td><a href="nursing_obs.php?id=<?php echo $hn; ?>">Nursing Observations</a></td>
            <td><a href="patient_outcome.php?id=<?php echo $hn; ?>">Update Outcome</a></td>
						
					</tr>
					<?php } ?>

				</table>

		</div>

	</div>
</div>


