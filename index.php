<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">

</head>
<body style="background-color: #f3ddd3;" >
<a href="login.php" class="float-right pr-3 pt-3" style="font-size: 20px;;color: #000;" >Admin Login</a><br><br>
<h1 class="text-center pt-5">Welcome to Student Management System</h1>


<!----------------- form  ----------------->
<form method="post" action="index.php">
<center>
<div class="jumbotron pt-4 pl-3" style="width: 35%; background-color: #f1ccba;border-radius: 10px;margin-top: 100px;">
<h3 class="text-center">Students Information</h3>
<div class="row row-cols-2 pt-5">
<h5>Choose Standard</h5>
<select name="std" style="background-color: transparent;border: 1.5px solid #f8a175;" required>
	 			 <option value="1">1st</option>
	 			 <option value="2">2nd</option>
	 			 <option value="3">3rd</option>
	 			 <option value="4">4th</option>
	 			 <option value="5">5th</option>
	 			 <option value="6">6th</option>
	 		  </select>	
</div>
<div class="row row-cols-2 pt-4">
<h5>Enter Roll No. </h5>
<input type="text" name="rollno" required style="background-color: transparent;border: 1.5px solid #f8a175;">
</div>
<div class="pt-4" align="center"><input type="submit" class="btn btn-light btn-sm" name="submit" value="Show Details"></div>
</div>
</center>

 </form>
<!----------------- form end ----------------->	 



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

   
   if(isset($_POST['submit']))
   {
      include ('dbcon.php');
      include ('function.php');

      $standard=$_POST['std'];
      $rollno=$_POST['rollno'];

      showdetails($standard,$rollno);

   }

?>