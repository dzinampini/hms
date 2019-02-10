<?php include('_header.php'); 

$id = $_GET['id'];

$del = "DELETE FROM staff WHERE staff_id = '$id'";
$rs  = mysqli_query($con, $del); 
 ?><script>alert('Account successfully deactivated!');location="hr_view.php";</script><?php