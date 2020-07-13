<?php
include('validate.php');
?>
<!doctype html>
<html>
<head>
<title>View</title>
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
</head>
<script>
function confirmation(){

var con=confirm("Are you sure you want to delete this record?");
if (con==true){
   alert ("record deleted");
}
return con;				
}
</script>
<body>
<?php
include('include/navbar.php');
?>

<!-- <div class="modal-fade" id="employeeform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">		
	<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">EmployeeForm</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
 </div>  -->
<!-- <div class="form-popup" id="employeeform">  
  <form name="RegForm" action="new2.php" onsubmit="return REG_FORM()" method="post" enctype="multipart/form-data">
 <div class="modal-body">  
  
  <div class="form-group">
  <div class="col-sm-6">
  <label>First Name</label>
  <input type="text" name="fname" class="form-control" placeholder="enter first name">
  </div>
  <div class="col-sm-6">
  <label>Last Name</label>
  <input type="text" name="lname" class="form-control" placeholder="enter last name">
  </div>
  </div>
  <br/>
  <hr/>
  
  <div class="form-group">
  <div class="col-sm-6">
  <label>Department</label>
 
 <select name='Dept' class="form-control" placeholder="enter department type">
<option value >select</option>
<option >admin</option>
<option >account</option>
<option >finance</option>
<option >hr</option>
<option >technical</option>
</select>
  </div>
  
   <div class="col-sm-6">
  <label>DepartmentLocation</label>

 <select name='DeptLoc' class="form-control" placeholder="enter department type">
<option value >select</option>
<option >delhi</option>
<option >uttar pradesh</option>
<option >madhya pradesh</option>
<option >punjab</option>
<option >mumbai</option>
</select>
  </div>
  </div>
  <br/>
  <hr/>
  
 <div class="form-group">
  <label>Contact</label>
  <input type="text" name="Contact" maxlength='10' class="form-control" placeholder="enter username">
  </div>
    
  <div class="form-group">
  <label>email</label>
  <input type="text" name="email" class="form-control" placeholder="enter state">
  </div>
  
  <div class="form-group">
  <label>subject</label>
  <input type="text" name="subject" class="form-control" placeholder="enter subject">
  </div>
  
  <div class="form-group">
  <label>PASSWORD</label>
  <input type="text" name="pwd" class="form-control" placeholder="enter password">
  </div>
  
   <div class="form-group">
  <div class="col-sm-6">
  <label>AccountManager</label>
 <select name='manager' class="form-control" placeholder="enter Account Manager">
<option value >select</option>
<option >Himanshi gupta</option>
<option >Himanshu gupta</option>
<option >Anamika Parashar</option>
<option >Nandini patel</option>
<option >Rajni rajput</option>
</select>
  </div>
  
   <div class="col-sm-6">
  <label>Grade</label>
 <select name='grade' class="form-control" placeholder="enter grade">
<option value >select</option>
<option >A</option>
<option >B</option>
<option >C</option>
<option >D</option>
<option >E</option>
</select>
  </div>
  </div>
  <br/>
  <hr/>
  
  <div class="form-group">
  <label>PayScale</label>
 <select name='PayScale' class="form-control" placeholder="enter Account Manager">
<option value >select</option>
<option >1000-10000</option>
<option >10000-50000</option>
<option >50000-100000</option>
<option >100000</option>
</select>
  </div>
  
  
  <div class="form-group">
  <label>Salary</label>
  <input type="text" name="tds" class="form-control" placeholder="enter state">
  </div>
  
  <div class="form-group">
  <div class="col-sm-6">
  <label>MealFacility</label>
  <td><input type="radio" name="mealfacility" value="yes"/>yes</td>
  <td><input type="radio" name="mealfacility" value="no"/>no</td>
  </div>
  
  
   <div class="col-sm-6">
  <label>CabFacility</label>
 <td><input type="radio" name="cabfacility"  value="yes" />yes</td>
  <td><input type="radio" name="cabfacility" value="no" />no</td>
  </div>
  </div>
  <br/>
  <hr/>
  
  <div class="form-group">
  <div class="col-sm-6">
  <label>City</label>
  <input type="text" name="city" class="form-control" placeholder="enter email">
  </div>
  
  <div class="col-sm-6">
  <label>PinCode</label>
  <input type="text" name="pincode" class="form-control" placeholder="enter post code">
  </div>
  </div>
  <br/>
  <br/>
  <hr/>

  
  <div class="form-group">
  <label>AadharNumber</label>
  <input type="file" name="upload[]" class="form-control" placeholder="enter AadharNumber">
  </div>
  
  <div class="form-group">
  <label>PanNumber</label>
  <input type="file" name="upload[]" class="form-control" placeholder="enter PanNumber">
  </div>
  
  <div class="form-group">
  <label>10thMarksheet</label>
  <input type="file" name="upload[]" class="form-control" placeholder="enter 10thMarksheet">
  </div>
  <br/>
  
  <div class="form-group">
  <label>12thMarksheet</label>
  <input type="file" name="upload[]" class="form-control" placeholder="enter 12thMarksheet">
  </div>
   
  <div class="form-group">
  <label>Status</label>
 <select name='status' class="form-control" placeholder="enter employment type">
<option value >select</option>
<option >active</option>
<option >update</option>
<option >pending</option>
</select>
  </div>
  
  </div>
  <div class="modal-footer"> 
  <a href="view3.php"><button type="button" class="btn btn-secondary" >close</button></a>
  <button type="submit" name="submit" value="send" class="btn btn-primary">Save</button>
  </div > 
  </form>	
 </div>
<!-- </div>
  </div>   -->

<div class="container-fluid">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Admin Profile
<a href="form4.html"><button type="button" class="btn btn-primary" >
Add Employee Data
</button></a>
</h6>

<!--  <div class="container-fluid">  -->
 <div class="card-body">  
<div class="text-warning text-center">
<h3>Display Data</h3>
</div>
			
<div class="row">
<table class="table table-striped table-bordered">
              <thead>
                 <tr>
			     <th>id</th>
                 <th>Name</th>
                 <th>department</th>
                 <th>departmentLocation</th>
				 <th>contact</th>
                 <th>email</th>
				<!-- <th>subject</th>-->
				 <th>password</th>
				<!-- <th>Salary</th>
				 <th>Cab Facility</th> 
				 <th>Pincode</th> --> 
				 <th>AadharNumber</th>
                 <th>PanNumber</th>
				 <th>10thMarksheet</th>
                 <th>12thMarksheet</th>
				<!-- <th>Status</th> -->
				 <th>Action</th>
                 </tr>
               </thead>
               <tbody>
<?php

  include('config/require.php');
  
  
 // $query="select * from students order by id";
 
 $query="select * from students order by id"; 
       $result=mysqli_query($conn,$query);
	   
	   while($row = mysqli_fetch_array($result)) {
    
	echo "<tr>";
	echo "<td>".$row["id"]."</td>";
	echo "<td>".$row["fname"].'&nbsp'.$row["lname"]."</td>";
	echo "<td>".$row["department"]."</td>";
	echo "<td>".$row["departmentlocation"]."</td>";
	echo "<td>".$row["contact"]."</td>";
	echo "<td>".$row["email"]."</td>";
//	echo "<td>".$row["subject"]."</td>";
	echo "<td>".$row["password"]."</td>";
//	echo "<td>".$row["accountmanager"]."</td>";
//	echo "<td>".$row["grade"]."</td>";
//	echo "<td>".$row["payscale"]."</td>";
//	echo "<td>".$row["salary"]."</td>";
//	echo "<td>".$row["mealfacility"]."</td>";
//	echo "<td>".$row["cabfacility"]."</td>";
//	echo "<td>".$row["city"]."</td>";
//	echo "<td>".$row["pincode"]."</td>";	
//	echo "<td><a href='uploaded/$row[aadharnumber]'><img src='uploaded/".$row['aadharnumber']."' height='30' width='30'/>uploaded/".$row['aadharnumber']."</a></td>";
	echo "<td><a href='uploaded/$row[aadharnumber]'><img src='uploaded/".$row['aadharnumber']."' height='40' width='50'/></a></td>";
//	echo "<td><a href='uploaded/$row[pannumber]'><img src='uploaded/".$row['pannumber']."' height='30' width='30'/>".$row["pannumber"]."</a></td>";
	echo "<td><a href='uploaded/$row[pannumber]'><img src='uploaded/".$row['pannumber']."' height='40' width='50'/></a></td>";
	
//	echo "<td><a href='uploaded/$row[ssc]'><img src='uploaded/".$row['ssc']."' height='30' width='30'/>uploaded/".$row['ssc']."</a></td>";
	
	echo "<td><a href='uploaded/$row[ssc]'><img src='uploaded/".$row['ssc']."' height='40' width='50'/></a></td>";
	
//	echo "<td><a href='uploaded/$row[hsc]'><img src='uploaded/".$row['hsc']."' height='30' width='30'/>uploaded/".$row["hsc"]."</a></td>";
	
	echo "<td><a href='uploaded/$row[hsc]'><img src='uploaded/".$row['hsc']."' height='40' width='50'/></a></td>";
//	echo "<td>".$row["status"]."</td>";
	echo "<td width=950>";
	echo  '<a class="glyphicon glyphicon-pencil" href="edit.php?id='.$row['id'].'"></a>';
    ?>
	&nbsp&nbsp;
	<?php
    echo  '<a class="glyphicon glyphicon-trash" href="delete.php?id='.$row['id'].'" onClick="return confirmation()"></a>';
    echo "</td>";
  
	echo "</tr>";
	   } 
$conn->close();
  ?>
</tbody>
</table>
</div>
</div>
 </div>
</div>
</div>
</body>
</html> 