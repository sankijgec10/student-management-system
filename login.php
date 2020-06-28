<?php
session_start();


  if(isset($_SESSION['uid']))
  {
  	header('location:admin/admindash.php');

  }




?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
</head>
<body style="background-color: #f3ddd3;">
	
		
	
<h1 class="text-center pt-5">Admin Login</h1>
 <!--------------- form --------------->
 <form method="post" action="login.php">
<center>
<div class="jumbotron pl-0 pb-3 pt-3" style="width: 20%; background-color: #f1ccba;border-radius: 10px;margin-top: 100px;">
<div class="row row-cols-2">
	<label class="pl-3" for="uname">Username</label>
	<input type="text" name="uname" required>
</div>
<div class="row row-cols-2 pt-3">
	<label class="pl-3" for="pass">Password</label>
	<input type="password" name="pass" required>
</div>
<div class="pt-4" align="center"><input class="btn btn-light btn-sm" type="submit" name="Login" value="Login"required></div>
</div>
<h5><a href="index.php">Back to Homepage</a></h5>
</center>
 </form>
 <!--------------- form end --------------->
<!-- scripts -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>	 
</body>
</html>

<?php

 include('dbcon.php');
 if(isset($_POST['Login']))
 {
 	$username=$_POST['uname'];
 	$password=$_POST['pass'];
   
     $query="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
     $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);
     if($row<1)
     {
     	?>
     	<script>
     		alert('username or password is not match!!');
     		window.open('login.php','_self');
     	</script>
     	<?php
     }

     else{

     	$data=mysqli_fetch_assoc($run);

     	$id=$data['id'];

     	session_start();

     	$_SESSION['uid']=$id;
     	header('location:admin/admindash.php');

     }


 }



?>


