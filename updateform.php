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
  include('titleheader.php');
  include('../dbcon.php');

  $sid=$_GET['sid'];

  $sql="SELECT * FROM `student` WHERE `id`='$sid'";
  $run=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($run);



?>
<form method="POST" action="updatedata.php" enctype="multipart/form-data">
	<table align="center" border="1" style="margin-top: 50px;" >
		<tr>
			<td>Roll no.</td><td><input type="text" name="rollno" value="<?php echo $data['rollno'];?>"></td>
		</tr>
		<tr>
			<td>Full name</td><td><input type="text" name="name" value="<?php echo $data['name'];?>"></td>
		</tr>
		<tr>
			<td>City</td><td><input type="text" name="city" value="<?php echo $data['city'];?>"></td>
		</tr>
		<tr>
			<td>Parent Contct no.</td><td><input type="text" name="number" value="<?php echo $data['pcont'];?>"></td>
		</tr>
		<tr>
			<td>Standard</td><td><input type="text" name="standard" value="<?php echo $data['standard'];?>"></td>
		</tr>
		<tr>
			<td>Image</td><td><input type="file" name="simage"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>


	</table>
	
</form>