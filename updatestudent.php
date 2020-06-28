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

<form method="POST" action="updatestudent.php">
	<table align="center" style="margin-top: 20px;">
	<tr>
		<th>Enter Standard</th>
		<td><input type="number" name="standard" placeholder="Enter Standard"></td>

		<th>Enter Student Name</th>
		<td><input type="text" name="name" placeholder="Enter Student Name"></td>

		<td><input type="submit" name="submit" value="Search"></td>

	</tr>
	</table>
</form>

<table align="center" width="80%" style="margin-top: 20px;"border="1">
   <tr>
	<th>No</th>
	<th>Image</th>
	<th>Name</th>
	<th>Roll No.</th>
	<th>Edit</th>
  </tr>	


<?php

   
    if(isset($_POST['submit']))
    {
    	include('../dbcon.php');
    	$standard=$_POST['standard'];
    	$name=$_POST['name'];

    	$sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
    	$run=mysqli_query($con,$sql);

    	if(mysqli_num_rows($run)<1)
    	{
          echo "<tr><td colspan='5'>No Record Found</td></tr>";

    	}
        
    	else
    	{   
    		$count=0;
    		while($data=mysqli_fetch_assoc($run))
    		{
    			  $count++;
    			  ?>

                  <tr align="center">
	                 <td><?php echo $count; ?></td>
	                 <td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width: 100px;"></td>
	                
	                 <td><?php echo $data['name']?></td>
	                 <td><?php echo $data['rollno']?></td>
	                 <td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
                  </tr>
                  <?php
    		}
    	}
    }
  ?>
 </table>  