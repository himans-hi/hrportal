<html>
<head>
<title>View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
  include('include/navbar.php');
?>

<div class="container-fluid">

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
</div>
<div class="card-body">
<?php

  include('config/require.php');
 
  if(isset($_GET['id'])){
   $id = $_GET['id'];

      
   $sql= "select * from emp1 where id=$id" ;
   $result= mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   
  }
  ?>
   <form action="update2.php" method="post">
  <div class="modal-body">
  
  <div class="form-group">
  <div class="col-sm-6">
  <label>First Name</label>
  <input value="<?php echo $row['fname'] ?>" type="text" name="fname" class="form-control" placeholder="enter first name">
  </div>
  <div class="col-sm-6">
  <label>Last Name</label>
  <input value="<?php echo $row['lname'] ?>" type="text" name="lname" class="form-control" placeholder="enter last name">
  </div>
  </div>
  <br/>
  <hr/>
 
 <div class="form-group">
  <label>Address</label>
  <input value="<?php echo $row['address'] ?>"  type="text" name="address" class="form-control" placeholder="enter username">
  </div>
    
  <div class="form-group">
  <div class="col-sm-6">
  <label>State</label>
  <input value="<?php echo $row['state'] ?>" type="text" name="state" class="form-control" placeholder="enter state">
  </div>
  <div class="col-sm-6">
  <label>Post Code</label>
  <input value="<?php echo $row['post_code'] ?>" type="text" name="post" class="form-control" placeholder="enter post code">
  </div>
  </div>
  <br/>
  <br/>
  <hr/> 
  <div class="form-group">
  <label>email</label>
  <input value="<?php echo $row['email'] ?>" type="text" name="email" class="form-control" placeholder="enter email">
  </div>
  
  <div class="form-group">
  <label>password</label>
  <input value="<?php echo $row['password'] ?>" type="password" name="password" class="form-control" placeholder="enter password">
  </div>
  
  <div class="form-group">
  <label>Date Of Birth</label>
  <input value="<?php echo $row['date_of_birth'] ?>" type="date" name="date" class="form-control" placeholder="enter date of birth">
  </div>
  <br/>
  
  <div class="form-group">
  <label>PhoneNumber</label>
  <input value="<?php echo $row['phonenumber'] ?>" type="int" name="phone" class="form-control" placeholder="enter phone number">
  </div>
  <br/>
  
  <div class="form-group">
  <label>Designation</label>
  <input value="<?php echo $row['designation'] ?>" type="text" name="designation" class="form-control" placeholder="enter designation">
  </div>
  <br/>
  
  <div class="form-group">
  <label>Reports To</label>
  <input value="<?php echo $row['reports'] ?>" type="text" name="reports" class="form-control" placeholder="enter reports">
  </div>
  <br/>
  
  <div class="form-group">
  <label>Employment Type</label>
 <!-- <input type="inpu" name="phone" class="form-control" placeholder="enter phone number">-->
 <select name='emp' class="form-control" placeholder="enter employment type">
<option value >select</option>
<option 
<?php
if($row['employment_to']=='Full Time')
{
	echo "selected";
}
?>
>Full Time</option>
<option 
<?php
if($row['employment_to']=='Part Time')
{
	echo "selected";
}
?>
>Part Time</option>
<option 
<?php
if($row['employment_to']=='Casual')
{
	echo "selected";
}
?>
>Casual</option>
</select>
  </div>
  <br/>
  
  
  <input type='hidden' name='id' value= "<?php echo $row['id'] ?>">
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
  <button type="submit" name="update" class="btn btn-primary" value="update">Save</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  </body>
  </html>