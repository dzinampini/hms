<?php include('_header.php'); ?>


<div class="container">
  <div class="row">

    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>Surname</th>
            <th>First Name</th>
            <th>EC Number</th>
            <th>Contact Details</th>
            <th>Role</th>
            <th>Dept</th>
            <th></th>
            <th></th>
          </tr>



          <?php $rs2 = mysqli_query($con, "select * from staff ORDER BY surname ASC")or die(mysqli_error($con));

          while($row = mysqli_fetch_array($rs2)){
             $staff_id = $row['staff_id']; 
             $surname=$row['surname'];
             $fname=$row['fname'];
             $role = $row['role']; 
             $dept = $row['dept'];
             // $imp = $row['imp']; 
             ?>
          <tr>
            <td><?php echo $surname; ?></td>
            <td><?php echo $fname; ?></td>
            <td><?php echo $staff_id; ?></td>
            <td><?php echo ucfirst($role); ?></td>
            <td><?php echo ucfirst($dept); ?></td>
            <td><a href="hr_change_dept.php?id=<?php echo $staff_id; ?>&amp;name=<?php echo $surname.' '.$fname; ?>">Change Dept</a></td>
            <td><a href="hr_delete.php?id=<?php echo $staff_id; ?>">Deactivate Account</a></td>
            
          </tr>
          <?php } ?>

        </table>

    </div>

  </div>
</div>


