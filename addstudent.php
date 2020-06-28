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

?>
<form method="POST" action="addstudent.php" enctype="multipart/form-data">
	<table align="center" border="1" style="margin-top: 50px;" >
		<tr>
			<td>Roll no.</td><td><input type="text" name="rollno"></td>
		</tr>
		<tr>
			<td>Full name</td><td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>City</td><td><input type="text" name="city"></td>
		</tr>
		<tr>
			<td>Parent Contct no.</td><td><input type="text" name="number"></td>
		</tr>
		<tr>
			<td>Standard</td><td><input type="text" name="standard"></td>
		</tr>
		<tr>
			<td>Image</td><td><input type="file" name="simage"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
		</tr>


	</table>
	
</form>
</body>
</html>

<?php
    
    if(isset($_POST['submit']))
    {

    	include('../dbcon.php');

    	$roll=$_POST['rollno'];

    	$name=$_POST['name'];

    	$city=$_POST['city'];

    	$number=$_POST['number'];

    	$std=$_POST['standard'];


    	$imagename=$_FILES['simage']['name'];
    	$tempname=$_FILES['simage'] ['tmp_name'];

    	move_uploaded_file($tempname,"../dataimg/$imagename");

    	$query="INSERT INTO `student`( `rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$roll','$name','$city','$number','$std','$imagename')";
    	$run=mysqli_query($con,$query);

    	if($run==true)
    	{
    		?>
    		<script>
    			alert('Database insertion successfully');
    		</script>
    		<?php

    	}

    }

 
 ?>