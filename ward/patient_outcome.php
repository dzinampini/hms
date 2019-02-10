<?php include('_header.php'); ?>


<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form class="" method="POST" action="">
				<div class="form-group">
					<label>Outcome</label>
					  <br><br>
					  
					  <input type="radio" name="outcome" value="absconded" required> Absconded<br>
					  <input type="radio" name="outcome" value="died"> Died<br>
					  <input type="radio" name="outcome" value="discharged"> Discharged<br>
					  <input type="radio" name="outcome" value="transfered"> Transfered<br>
				</div>

				<div class="form-group">
					<label>Outcome Notes</label>
					<textarea name="outcome_notes" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<br><br>
					<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Update Outcome"  /> 
				</div>

			</form>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>


<?php 
if(isset($_POST['submit'])){


$outcome = $_POST['outcome']; 
$outcome_notes = $_POST['outcome_notes']; 
$outcome_date = date("Y-m-d"); 
$id = $_GET['id']; 

$outcome_update = "UPDATE `opd_patients` SET `outcome`='$outcome',`outcome_date`='$outcome_date',`outcome_notes`='$outcome_notes' WHERE opd_id = '$id'; "; 

$rs = mysqli_query($con, $outcome_update); ?> 

<script>
       alert("Outcome successfully updated!");
       location = 'index.php';
      </script>
<?php }
?>


}