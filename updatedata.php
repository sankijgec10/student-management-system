<?php

  include('../dbcon.php');

    	$roll=$_POST['rollno'];

    	$name=$_POST['name'];

    	$city=$_POST['city'];

    	$number=$_POST['number'];

    	$std=$_POST['standard'];

    	$id=$_POST['sid'];


    	$imagename=$_FILES['simage']['name'];
    	$tempname=$_FILES['simage'] ['tmp_name'];

    	move_uploaded_file($tempname,"../dataimg/$imagename");

    	$query="UPDATE `student` SET `rollno` = '$roll', `name` = '$name', `city` = '$city', `pcont` = '$number', `standard` = '$std', `image` = '$imagename' WHERE `id` = $id;";
    	$run=mysqli_query($con,$query);

    	if($run==true)
    	{
    		?>
    		<script>
    			alert('Database updated successfully');
    			window.open('updateform.php?sid=<?php echo $id;?>','_self');
    		</script>

    		<?php

        }		
 ?>