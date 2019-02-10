<?php include('_header.php');

$id = $_GET['id'];  ?>


<div class="container">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <form method="POST" action="">
        <div class="form-group">
          <label>Department</label>
          <select name="department" class="form-control">
            <option name"" value="">Select Department</option>
            <?php $rs3 = mysqli_query($con, "select * from units WHERE category = 'Department' ORDER BY zita ASC")or die(mysqli_error($con));

          while($row = mysqli_fetch_array($rs3)) {
             $dept=$row['zita']; ?>
             <option name="<?php echo $dept; ?>" value="<?php echo $dept; ?>"><?php echo $dept.' Department'; ?></option>
             <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label>Order</label>
          <input name="orderr" class="form-control" required>
        </div>


        <div class="form-group">
          <br><br>
          <input name="submit" type="submit" id="submit" class="form-control submit_button" value="Add Order"  /> 
          
        </div>
      </form>

      



    </div>
    <div class="col-md-3">
    </div>
  </div>
</div>


<?php 



if(isset($_POST['submit'])){


$department = $_POST['department'];
$orderr = $_POST['orderr'];
// $id = $_GET['id']; 

$order_insert = "INSERT INTO `orders` (`hn`, `department`, `orderr`, `made_by`) VALUES ('$id', '$department','$orderr','$username')"; 

$rs = mysqli_query($con, $order_insert)or die(mysqli_error($con)); ?> 

<script>
       alert("Order added successfully.");
       location = 'orders.php?id=<?php echo $id; ?>';
      </script>
<?php }
?>


}

