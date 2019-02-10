<?php include('_header.php'); ?>


<div class="container">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <form method="POST" action="">
        

        <div class="form-group">
          <label>Temperature</label>
          <input name="temp" type="number" step="0.01" class="form-control">
        </div>
        
        <div class="form-group">
          <label>BP</label>
          <input name="bp" class="form-control" placeholder="Eg. 120/80" maxlength="7" >
        </div>

        <div class="form-group">
          <br><br>
          <input name="submit" type="submit" id="submit" class="form-control submit_button" value="Add Observation/History"  /> 
        </div>
      </form>


    </div>
    <div class="col-md-3">
    </div>
  </div>
</div>


<?php 
if(isset($_POST['submit'])){
  $id = $_GET['id']; 


$temp = $_POST['temp']; 
  $bp = $_POST['bp'];

$obs_insert = "INSERT INTO `temp_observations` (`hn`, `temp`, `bp`, `made_by`) VALUES ('$id', '$temp', '$bp','$username')"; 

$rs = mysqli_query($con, $obs_insert) or die(mysqli_error($con)); ?> 

<script>
       alert("Observations added successfully.");
       location = 'monitors.php?id=<?php echo $id; ?>';
      </script>
<?php }
?>


}

