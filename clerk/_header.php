<?php
// error_reporting(0);
session_start();
// include '../aut.php';

include '../opendb.php';
$username=$_SESSION['username'];


if(!(isset($_SESSION['username']) && !empty($_SESSION['username']))) {
   ?> <script> 
        alert('You need to be logged in to access this page');
      </script><?php 
  header("location:../index.php");
  exit;
}

$rs = mysqli_query($con, "select * from staff where staff_id = '$username'")or die(mysqli_error($con));

while($row = mysqli_fetch_array($rs))
{
   $name1=$row['staff_id'];
   $fname1 = $row['fname'];
   $surname1 = $row['surname'];
   $dept = $row['dept'];
}


?>



<html>
    <head>
        <title>Hospital Management System</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <link rel="stylesheet" href="../css/bootstrap.min.css"><!-- bootstrap style -->
        <link rel="stylesheet" href="../css/font-awesome.min.css"><!-- font-awesome style -->
        <link rel="stylesheet" href="../css/style.css"><!-- custom style  -->

</head>




 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <span class="">Hello <?php echo $fname1.' '.$surname1; ?> (<?php echo 'Accounts Department'; ?>)</span>
        <br><br>
        <li style="list-style-type:none;"><a href="../logout.php"><i class="fa fa-user">&nbsp;Logout</i></a></li>
      </a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <br><br>
        <li><a href="index.php"><i class="fa fa-money">&nbsp;Bill Patient</i></a></li>
        <li><a href="add_patient.php"><i class="fa fa-plus">&nbsp;New Patient</i></a></li>
        <li><a href="receipt.php"><i class="fa fa-plus">&nbsp;Receipt Patient</i></a></li>
        <li><a href="view_balances.php"><i class="fa fa-plus">&nbsp;View Balance</i></a></li>
        
    </ul>
    </div>
  </div>
</nav>
