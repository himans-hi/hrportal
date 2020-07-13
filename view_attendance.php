<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>VIEW ATTENDANCE</title>  
</head>
<body>

<body>
<div class="container-fluid">
<div class="text-warning text-center">
<h3>VIEW ATTENDANCE</h3>
</div>
			
<div class="row">
<table class="table table-striped table-bordered">
              <thead>
                 <tr>
                 <th width="14%">Name</th>
                 <th width="14%">Attendance Date</th>
                 <th width="14%">In Time</th>
				 <th width="14%">Out Time</th>
				 <th width="14%">status</th>
				 </tr>
                 </thead>
                 <tbody>
<?php

  ini_set('display_error', 'All');
  error_reporting(0);

  $conn=mysqli_connect("localhost:3306","root","","employee");
  
  function query($sql, $condition=null){
	global $conn;
  }
  
  
   $query = "select * from attendance where name='$user'";
        $result = mysqli_query($conn,$query);
	   
	   while($row = mysqli_fetch_assoc($result)) {
    
	echo "<tr>";
	echo "<td>".$row["name"]."</td>";
	echo "<td>".$row["attendance_date"]."</td>";
	echo "<td>".$row["intime"]."</td>";
	echo "<td>".$row["outtime"]."</td>";
//	echo "<td>".$row["description"]."</td>";
	echo "<td>".$row["status"]."</td>";
	//echo "<td width=950>";
	//echo  '<a class="glyphicon glyphicon-pencil" href="edit.php?id='.$row['id'].'"></a>';
    ?>
	&nbsp&nbsp;
	<?php
    //echo  '<a class="glyphicon glyphicon-trash" href="delete.php?id='.$row['id'].'" onClick="return confirmation()"></a>';
    //echo "</td>";
  
	echo "</tr>";
	   } 
	   
$conn->close();
  ?>
  
</tbody>
</table>
</div>
</div>
</body>
</html>