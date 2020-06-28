<?php
session_start();


  if(isset($_SESSION['uid']))
  {
  	echo "";
  }

  else{

  	header('location: ../login.php');
  }
?>


<?php
 
  include('header.php');

?>

  <div class="admintitle" align="center">
  <h4><a href="logout.php"  style="float:right; margin-right:30px; font-size: 25px; color:black;margin-top: 10px;">Logout</a></h4>
  	<h1>Welcome to Admin Dashboard</h1>
  </div>

  <div class="dashboard" align="center">
  	<table>
  		<tr>
  			<td><a href="addstudent.php">Insert Student Details</a></td>
  		</tr>
  		<tr>
  			<td><a href="deletestudent.php">Delete Student Details</a></td>
  		</tr>
  		<tr>
  			<td><a href="updatestudent.php">Update Student Details</a></td>
  		</tr>

  	</table>
  	

  </div>

</body>
</html>