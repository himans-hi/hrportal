<?php
 include('validate.php');
?>

<?php
ini_set('display_error', 'All');
error_reporting(0);

  include('config/require.php');
  $message='';
  
  if(isset($_POST['submit']))
  {
      $name=$_POST['name'];
      $attendance_date =$_POST['attendance_date'];
       $intime=$_POST['intime'];
       $outtime=$_POST['outtime'];
       $description=$_POST['description'];
	   $status=$_POST['status'];
      
	  
		$checkvalues = "select * from attendance where attendance_date='".$attendance_date."' and status='".$status."'"; 
	 	       
	$sql = mysqli_query($conn, $checkvalues);

	 $count = mysqli_num_rows($sql);
	
	if($count > 0){
		echo "attendance already exists";
		header("Location:attendance.php");
	}else{
	 $insertsql="insert into attendance(name,attendance_date,intime,outtime,description,status)values('$name','$attendance_date','$intime','$outtime','$description','$status')";
	 
		  $returnval = mysqli_query($conn, $insertsql);
		  if($returnval){
		//	 echo "successful insert";
		//	 header("Location:createevent.php");
			 $message = '<div class="alert alert-success">Your attendance mark successfully</div>';
		  }else{
		//	  echo "error in insert";
			  $message = '<div class="alert alert-danger">your attendance not mark successfully</div>';
		  }	
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ATTENDANCE FORM</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<!--<body id="page-top"> -->
 <body> 
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
	 <?php
//	 $_COOKIE["page"]="createevent";
  include('include/navbar.php');
  ?>
  
 <div class="container-fluid">
   <div class="modal-fade" id="employeeform" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document"> 
<div class="modal-content">	
	<div class="modal-header"> 
	<h1><b><font face="Monotype Corsiva">ATTENDANCE FORM</font></b> </h1>
<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>  -->
</div>	
<?php
echo $message;		
?>
    <form name="RegForm" onsubmit="return REG_FORM()" method="post">
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>&nbsp
            <div class="col-sm-8">
                <input type="text" value="<?php echo $user; ?>" class="form-control"  id="name" name="name" placeholder="name" required>
            </div>
        </div>
		
        <div class="form-group row">
            <label for="attendanceDate" class="col-sm-2 col-form-label">Attendance Date</label>&nbsp
            <div class="col-sm-8">
                <input type="date" class="form-control" id="attendance_date" name="attendance_date" placeholder="attendance_date" required>
            </div>
      </div>
	  
	  <div class="form-group row">
            <label for="inTime" class="col-sm-2 col-form-label">In Time</label>&nbsp
            <div class="col-sm-8">
                <input type="time" class="form-control" id="intime" name="intime" placeholder="in_time" required>
            </div>
      </div>
	  
	  <div class="form-group row">
            <label for="outTime" class="col-sm-2 col-form-label">Out Time</label>&nbsp
            <div class="col-sm-8">
                <input type="time" class="form-control" id="outtime" name="outtime" placeholder="out_time" required>
            </div>
      </div>
	  
	  <div class="form-group row">
            <label for="Description" class="col-sm-2 col-form-label">Description</label>&nbsp
            <div class="col-sm-8">
                <textarea name="description" rows="6" class="form-control" id="description" name="description" placeholder="Enter description"></textarea>
            </div>
      </div>
	  
	  <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>&nbsp
            <div class="col-sm-8">
                <td><input type="radio" name="status" value="present" />present</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<td><input type="radio" name="status" value="late" />late</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<td><input type="radio" name="status" value="absent" />absent</td>
            </div>
      </div>
	  
        <div class="form-group row">
            <div class="col-sm-6 offset-sm-2">
                <button type="submit" id ="submit" name="submit" value="send" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>		
						
						
						
						
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  
</body>
</html>