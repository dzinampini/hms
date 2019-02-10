<?php include('_header.php'); ?>

<?php $id = $_GET['id']; 
$rs1 = mysqli_query($con, "select * from opd_patients WHERE opd_id = '$id'")or die(mysqli_error($con));
while($row = mysqli_fetch_array($rs1)) {
  $age=$row['age'];
  $sex=$row['sex'];
} ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>

		<div class="col-md-4">
			<form method="POST" action="">
				<div class="form-group">
					<label>Impression/Diagnosis (Specify)</label>
					<textarea name="imp" class="form-control" rows="8" required></textarea>
				</div>

				<div class="form-group">
					<label>Action</label>
					<select name="action" class="form-control">
						<option name"home" value="home">Home</option>

            <?php if($age < 1) { ?>
              <option value="scbu">Admit SCBU</option>
            <?php } ?>
            <?php if($age >= 1 && $age < 12){ ?>
              <option value="csw">Admit CSW</option>
              <option value="cmw">Admit CMW</option>
            <?php } ?>
            <?php if($age > 12 && $sex == 'male' ){ ?>
              <option value="mmw">Admit MMW</option>
              <option value="msw">Admit MSW</option>
              <option value="icu">Admit ICU</option>
              <option value="psych">Admit Psych</option>
              <option value="private">Admit Private</option>
            <?php } ?>
            <?php if($age > 12 && $sex == 'female' ){ ?>
              <option value="birchmaternity">Admit Birch Maternity</option>              
              <option value="fmw">Admit FMW</option>
              <option value="fsw">Admit FSW</option>
              <option value="gynae">Admit Gynae</option>
              <option value="icu">Admit ICU</option>
              <option value="maternity">Admit Maternity</option>
              <option value="psych">Admit Psych</option>
              <option value="private">Admit Private</option>
              <option value="pnw">Admit PNW</option>
            <?php } ?>
				 	<?php //$rs3 = mysqli_query($con, "select * from units WHERE category = 'Ward'")or die(mysqli_error($con));

					// while($row = mysqli_fetch_array($rs3)) {
					//    $ward1=$row['zita'];
					//    $ward2 = str_replace(' ', '', $ward1); 
					//    $ward3 = strtolower($ward2); ?>
					<!-- //    <option name="<?php// echo $ward3; ?>" value="<?php //echo $ward3; ?>"><?php //echo 'Admit '.$ward1.' Ward'; ?></option> -->
					    <?php //} ?>
					</select>
				</div>

				<div class="form-group">
					<label>Doctor's orders can be processed in the following pages. Update consulation details first then you can add doctor's orders</label>
				</div>

				<div class="form-group">
					<br><br>
					<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Update Consulation"  /> 
				</div>
			</form>
		</div>
		

		<div class="col-md-4">
		</div>
		
	</div>
</div>


<?php if(isset($_POST['submit'])){
	$imp = $_POST['imp']; 
	$action = $_POST['action'];
	$id = $_GET['id'];

	$cons_update = "UPDATE `opd_patients` SET `imp`='$imp',`action`='$action' WHERE opd_id='$id'";
	$rs = mysqli_query($con, $cons_update); ?> 

	<script>
	       alert("Consultation details updated. You can now orders, if there are any");
	       location = 'orders.php?id=<?php echo $id; ?>';
	      </script>
<?php } ?>