<?php include('_header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Age</th>
						<th>Sex</th>
						<th>Temperature</th>
						<th>BP</th>
						<th>HIV Status</th>
            <th>Weight</th>
					</tr>

					<?php $rs3 = mysqli_query($con, "select * from opd_patients WHERE temp <> '' AND imp = ''")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs3)) {
					   $fname=$row['fname'];
					   $surname=$row['surname'];
					   $age=$row['age'];
					   $sex=$row['sex'];
             $weight=$row['weight'];
					   $rec_receipt=$row['rec_receipt'];
					   $opd_id=$row['opd_id']; 

					   $temp = $row['temp'];
					   $bp = $row['bp']; 
					   $hiv = $row['hiv'];  

					   ?>

					<tr>
						<td><?php echo $fname; ?></td>
						<td><?php echo $surname; ?></td>
						<td><?php echo $age; ?></td>
						<td><?php echo $sex; ?></td>
						<td><?php echo $temp; ?></td>
						<td><?php echo $bp; ?></td>
						<td><?php echo $hiv; ?></td>
            <td><?php echo $weight; ?></td>
						<td><a href="consult.php?id=<?php echo $opd_id; ?>">Consult Patient</a></td>
					</tr>

					<?php } ?>

				</table>
			</div>
		</div>
	</div>
</div>