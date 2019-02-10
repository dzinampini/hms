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
						<th>Receipt Number</th>
					</tr>

					<?php $rs3 = mysqli_query($con, "select * from opd_patients WHERE temp=''")or die(mysqli_error($con));

					while($row = mysqli_fetch_array($rs3)) {
					   $fname=$row['fname'];
					   $surname=$row['surname'];
					   $age=$row['age'];
					   $sex=$row['sex'];
					   $rec_receipt=$row['rec_receipt'];
					   $opd_id=$row['opd_id']; ?>

					<tr>
						<td><?php echo $fname; ?></td>
						<td><?php echo $surname; ?></td>
						<td><?php echo $age; ?></td>
						<td><?php echo $sex; ?></td>
						<td><?php echo $rec_receipt; ?></td>
						<td><a href="observe.php?id=<?php echo $opd_id; ?>">Observe Patient</a></td>
					</tr>

					<?php } ?>

				</table>
			</div>
		</div>
	</div>
</div>