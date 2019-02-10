<?php include('_header.php'); 

$id = $_GET['id'];
$zita = $_GET['name']; ?>

<div class="container">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <h3 align ="center">Changing dept for <?php echo $zita; ?></h3>
      <form method="POST" action="">
        <div class="form-group">
          <label>Department</label>
          <select name="dept" class="form-control">
            <option name"" value="">Select New Department</option>
            <?php $rs3 = mysqli_query($con, "select * from units ORDER BY zita ASC")or die(mysqli_error($con));

              while($row = mysqli_fetch_array($rs3)) {
                 $dept=$row['zita']; ?>
                 <option name="<?php echo $dept; ?>" value="<?php echo $dept; ?>"><?php echo $dept.' Department'; ?></option>
                 <?php } ?>
              </select>
            </div>

        <div class="form-group">
          <br><br>
          <input name="submit" type="submit" id="submit" class="form-control submit_button" value="Change Dept"  /> 
          
        </div>
      </form>

      



    </div>
    <div class="col-md-3">
    </div>
  </div>
</div>


<?php 



if(isset($_POST['submit'])){

$dept = $_POST['dept'];

$upd = "UPDATE staff SET dept = '$dept' WHERE staff_id = '$id'";
$rs  = mysqli_query($con, $upd); 
 ?><script>alert('Department successfully changed!');location="hr_view.php";</script><?php

}