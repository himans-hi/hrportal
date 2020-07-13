<html>
<head>
<title>View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
function confirmation(){

var con=confirm("Are you sure you want to delete this record?");
if (con==true){
   alert ("record deleted");
}
return con;				
}
</script>
</head>
<body>
<?php 
include('include/navbar.php');
?>
<div class="container-fluid">
<div class="card shadow mb-4"> 
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Admin Profile
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#employeeform">
Add admin profile
</button>
</h6>
</div>

<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
                 <th>id</th>
                 <th>Name</th>
                 <th>address</th>
                 <th>state</th>
				 <th>post_code</th>
                 <th>email</th>
				 <th>password</th>
				 <th>date_of_birth</th>
				 <th>Phone number</th>
				 <th>Designation</th>
                 <th>Reports</th>
				 <th>Employment Job</th>
				 <th>Actionn</th>
</tr>
</thead>
<tbody>
<?php
$conn=mysqli_connect("localhost:3306","root","","employee");
  
  function query($sql, $condition=null){
	global $conn;
  }

  $query="select * from emp1 order by id";
   $result=mysqli_query($conn,$query);
	   
	   while($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";
	echo "<td>".$row["id"]."</td>";
	echo "<td>".$row["fname"].$row["lname"]."</td>";
	echo "<td>".$row["address"]."</td>";
	echo "<td>".$row["state"]."</td>";
	echo "<td>".$row["post_code"]."</td>";
	echo "<td>".$row["email"]."</td>";
	echo "<td>".$row["password"]."</td>";
	echo "<td>".$row["date_of_birth"]."</td>";
	echo "<td>".$row["phonenumber"]."</td>";
	echo "<td>".$row["designation"]."</td>";
 	echo "<td>".$row["reports"]."</td>";
	echo "<td>".$row["employment_to"]."</td>";

	echo "<td width=950>";
	echo  '<a class="glyphicon glyphicon-pencil" href="edit2.php?id='.$row['id'].'"></a>';
    ?>
	&nbsp&nbsp;
	<?php
    echo  '<a class="glyphicon glyphicon-trash" href="delete2.php?id='.$row['id'].'" onClick="return confirmation()"></a>';
    echo "</td>";
  
	echo "</tr>";
	   } 
	   
$conn->close();
  ?>
</tbody>
</table>
</div>
</body>
</html> 





