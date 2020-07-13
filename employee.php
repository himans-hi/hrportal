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
  
 <!-- <div class="container" id="employeeform">
		<h1><b>Employee Form</b></h1>  -->
		
<div class="modal-fade" id="employeeform" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>		
		
  <form action="insert1.php" method="post">
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
  <label>Address</label>
  <input type="text" name="address" class="form-control" placeholder="enter username">
  </div>
    
  <div class="form-group">
  <div class="col-sm-6">
  <label>State</label>
  <input type="text" name="state" class="form-control" placeholder="enter state">
  </div>
  <div class="col-sm-6">
  <label>Post Code</label>
  <input type="text" name="post" class="form-control" placeholder="enter post code">
  </div>
  </div>
  <br/>
  <br/>
  <hr/> 
  <div class="form-group">
  <label>email</label>
  <input type="text" name="email" class="form-control" placeholder="enter email">
  </div>
  
  <div class="form-group">
  <label>password</label>
  <input type="password" name="password" class="form-control" placeholder="enter password">
  </div>
  
  <div class="form-group">
  <label>Date Of Birth</label>
  <input type="date" name="date" class="form-control" placeholder="enter date of birth">
  </div>
  <br/>
  
  <div class="form-group">
  <label>PhoneNumber</label>
  <input type="int" name="phone" class="form-control" placeholder="enter phone number">
  </div>
  <br/>
  
  <div class="form-group">
  <label>Designation</label>
  <input type="text" name="designation" class="form-control" placeholder="enter designation">
  </div>
  <br/>
  
  <div class="form-group">
  <label>Reports To</label>
  <input type="text" name="reports" class="form-control" placeholder="enter reports">
  </div>
  <br/>
  
  <div class="form-group">
  <label>Employment Type</label>
 <!-- <input type="inpu" name="phone" class="form-control" placeholder="enter phone number">-->
 <select name='emp' class="form-control" placeholder="enter employment type">
<option value >select</option>
<option >Full Time</option>
<option >Part Time</option>
<option >Casual</option>
</select>
  </div>
  <br/>
  
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
  <button type="submit" name="submit" class="btn btn-primary">Save</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </body>
  </html>
  
  
  