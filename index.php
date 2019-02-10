<?php //login script
if (isset($_POST['submit'])){
    session_start();
    include 'opendb.php';
     $username = $_POST["username"];
    $password = $_POST["password"];

        $result ="";
        $query = "SELECT * FROM staff WHERE staff_id = '$username' AND password = '$password'";
        $result = mysqli_query($con, $query);
        $rows=mysqli_fetch_array($result);

        $role=$rows['role'];
        $dept1 = $rows['dept']; 
        $dept2 = str_replace(' ', '', $dept1);
        $dept = strtolower($dept2);


        $_SESSION['username'] = $username;
        
        if(!$result){
            die( "\n\ncould'nt send the query because".mysqli_error($con));
            exit;
        }

        $row = mysqli_num_rows($result);

        if($row==1 && $role=='admin' && $dept=='hr'){
            header("location:hr/");
            exit;
        } 

        if($row==1 && $role=='nurse' && $dept=='opd'){
            header("location:opd/");
            exit;
        } 

        if($row==1 && $role=='' && $dept=='clerk'){
            header("location:clerk/");
            exit;
        } 

        if($row==1 && $role!='gh' && $dept=='x-ray'){
            header("location:dept/");
            exit;
        } 

        if($row==1 && $role!='gh' && $dept=='laboratory'){
            header("location:dept/");
            exit;
        } 

        if($row==1 && $role!='gh' && $dept=='csw'){
            header("location:ward/");
            exit;
        } 


        else{ ?>
            <script> 
                alert('Wrong Username or Password ,Please Try Again');
            </script>

        <?php }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Hospital Management System</title>

		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		
		<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap style -->
		<link rel="stylesheet" href="css/font-awesome.min.css"><!-- font-awesome style -->
		<link rel="stylesheet" href="css/style.css"><!-- custom style  -->
		<!-- favicon is missing -->
		<!-- js comes afetr page loads -->

	</head>

<body class="login_page">
<div class="container">
<div class="row">
<div class="col-md-8">
</div>

<div class="col-md-3 login_container">
	<div class="login_title">
		<a href="#"><img src="images/logo.jpg" align="center" draggable="false" ></a>
	</div>
	
	<div class="login-form">		
     	<form name="login_form" action="" method="POST" onsubmit ="" >
			<div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="username" type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <br><br>
            <button type="submit" name="submit" class="form-control btn btn-primary">LOG IN</button>			
		</form>
											
				
	</div><!--login form-->
</div><!--login container-->

<div class="col-md-1">
	</div>


</div><!--row-->
</div><!--conatiner-->

</body>