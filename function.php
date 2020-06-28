<head>
	
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
	<!-- scripts -->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
</head>


<?php


function showdetails($standard,$rollno)
{
    include ('dbcon.php');

    $qry="SELECT * FROM `student` WHERE `standard`='$standard' AND `rollno`='$rollno'";
    $run=mysqli_query($con,$qry);

    if(mysqli_num_rows($run)>0)
    {
         
         $data=mysqli_fetch_assoc($run);

         ?>
    <div class="container pb-5">
    <h4 class="text-center">Student Details</h4>
    <div class="row" style="background-color: #efc5ad">
    <div class="col-md-5 mt-md-0 mt-3">
    <img class="img-fluid mx-auto d-block pt-5 pr-3" alt="Responsive image" src="dataimg/<?php echo $data['image'];?>"  style="max-width: 250px; max-height: 250px;">
    </div>
    <div class="col-md-7 mt-md-0 mt-3">
    <table class="table pt-2">
  <tbody>
    <tr>
       <th>Roll no.</th>
      <td><?php echo $data['rollno'];?></td>
    </tr>
    <tr>
       <th>Name</th>
       <td><?php echo $data['name'];?></td>
    </tr>
    <tr>
       <th>Standard</th>
       <td><?php echo $data['standard'];?></td>
    </tr>
    <tr>
       <th>Parent Contact No.</th>
       <td><?php echo $data['pcont'];?></td>
    </tr>
    <tr>
       <th>City</th>
       <td><?php echo $data['city'];?></td>
    </tr>
  </tbody>
</table>
    </div>
    </div>
    </div>
    
                
      <?php
    }
    else
    {
    	echo "<script>alert('No Record Found.');</script>";
    }

}

?>