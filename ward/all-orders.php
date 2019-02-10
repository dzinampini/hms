<?php include('_header.php'); 

// $hn = $_GET['id']; ?>


<div class="container">
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <div class="doctor_orders">
        <h3 align="center">Doctors' Orders</h3>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>Department</th>
              <th>Patient</th>
              <th>Order</th>
              <th>Action</th>
            </tr>

        <?php $rs2 = mysqli_query($con, "select * from orders WHERE made_by = '$name1' ORDER BY entry_id DESC")or die(mysqli_error($con));

            while($row = mysqli_fetch_array($rs2)){
               $department = $row['department']; 
               $order=$row['orderr']; 
               $hn=$row['hn']; 
               $action=$row['proceduree']; ?>

               <tr>
                <td><?php echo $department; ?></td>
                <td><?php echo $hn; ?>/18 </td>
                <td><?php echo $order; ?></td>
                <td><?php echo $action; ?></td>
               </tr>


              <?php } ?>

            </table>
          </div>     
      </div><!--patient details -->
    </div>
    <div class="col-md-2">
    </div>

