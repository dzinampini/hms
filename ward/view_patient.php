<?php include('_header.php'); 

$hn = $_GET['id']; ?>


<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">

			<div class="patient_details">
				<h3 align="center">Patient Details</h3>

				<?php $rs2 = mysqli_query($con, "select * from opd_patients where opd_id = '$hn'  ")or die(mysqli_error($con));

						while($row = mysqli_fetch_array($rs2)){
						   $hn = $row['opd_id']; 
						   $surname=$row['surname'];
						   $fname=$row['fname'];
						   $age = $row['age']; 
						   $sex = $row['sex'];
						   $imp = $row['imp']; 
						   $ward = $row['action'];
						   } ?>


						   <b>Hospital # / Ward</b>
							<br>
							<?php echo $hn.date('/y').'<br>'.strtoupper($ward); ?> 
							<br><br>


							<b>Full Name(s)</b>
							<br>
							<?php echo ucfirst($surname).' '.ucfirst($fname); ?>
							<br><br>


							

							<b>Age/Sex</b>
							<br>
							<?php echo $age.'years / '.$sex; ?>
							<br><br>


							<b>Diagnosis</b>
							<br>
							<?php echo $imp; ?>
							<br><br>
			</div><!--patient details -->



			<div class="doctor_orders">
				<h3 align="center">Doctors' Orders</h3>

				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>Department</th>
							<th>Order</th>
              <th>Action</th>
						</tr>

				<?php $rs2 = mysqli_query($con, "select * from orders where hn = '$hn' ")or die(mysqli_error($con));

						while($row = mysqli_fetch_array($rs2)){
						   $department = $row['department']; 
						   $order=$row['orderr']; 
               $action=$row['proceduree']; ?>

						   <tr>
						   	<td><?php echo $department; ?></td>
						   	<td><?php echo $order; ?></td>
                <td><?php echo $action; ?></td>
						   </tr>


						  <?php } ?>

						</table>
					</div>	   
			</div><!--patient details -->




			<div class="nursing_obs">
				<h3 align="center">Nursing Observations</h3>

				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>Date &amp; Time</th>
							<th>Observation</th>
						</tr>

				<?php $rs2 = mysqli_query($con, "select * from observations where hn = '$hn' ")or die(mysqli_error($con));

						while($row = mysqli_fetch_array($rs2)){
						   $zuva = $row['zuva']; 
						   $obs=$row['obs']; ?>

						   <tr>
						   	<td><?php echo $zuva; ?></td>
						   	<td><?php echo $obs; ?></td>
						   </tr>


						  <?php } ?>

						</table>
					</div>	   
			</div><!--patient details -->


      <div class="nursing_obs">
        <h3 align="center">Temperature &amp; BP Monitors</h3>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>Date &amp; Time</th>
              <th>Temp</th>
              <th>BP</th>
            </tr>

        <?php $rs2 = mysqli_query($con, "select * from temp_observations where hn = '$hn' ORDER BY id DESC ")or die(mysqli_error($con));

            while($row = mysqli_fetch_array($rs2)){
               $zuva = $row['date_time']; 
               $temp=$row['temp'];
               $bp=$row['bp']; ?>

               <tr>
                <td><?php echo $zuva; ?></td>
                <td><?php echo $temp; ?></td>
                <td><?php echo $bp; ?></td>
               </tr>


              <?php } ?>

            </table>
          </div>     
      </div><!--patient details -->

			





		</div>
		<div class="col-md-2">
		</div>

