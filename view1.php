<?php

if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}
if(($_COOKIE['type']=="guest"))
{	
?>
<!DOCTYPE html>

<html>
<head><title>
	Knowledge Management Portal
</title><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" /><link href="new_css/new_temp.css" rel="stylesheet" type="text/css" /><link href="new_css/slider.css" rel="stylesheet" type="text/css" />
    
    <style type="text/css">
        .redclr
        {
            border: 3px solid #A82F2F !important;
        }
        .grnclr
        {
            border: 3px solid #6FF743 !important;
        }
        
        
        
        .right_bar .user .user_image:after
        {
            content: '';
            width: 23px !important;
            height: 22px;
            background: url();
            background-size: 100%;
            position: absolute;
            bottom: -2px !important;
            right: 10px;
            color: #D8D4D8;
            font-size: 24px;
        }
		
	
    </style>

  
</head>
<body>
    
    <div>
        <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
            <tr>
                <td colspan="2" width="100%">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">                   
<link href="vendor/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="vendor/css/font-awesome.css">
<link href="vendor/css/colorbox.css" rel="stylesheet" type="text/css" />
<script src="jquery/jquery-1.11.3.min.js"></script>
<script src="jquery/ui/1.11.4/jquery-ui.js"></script>
<script src="vendor/js/kmp.js"></script>
<script type="text/javascript" src="vendor/js/j1.js"></script>
<script src="KmpMessageJs/jquery.colorbox.js"
    type="text/javascript"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" />

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<script>
function confirmation(){

var con=confirm("Are you sure you want to delete this record?");
if (con==true){
   alert ("record deleted");
}
return con;				
}
</script>


<style type="text/css">
    .web_dialog
    {
        display: block;
        position: fixed;
        width: 380px;
        height: 210px;
        top: 50%;
        left: 50%;
        margin-left: -190px;
        margin-top: -130px;
        background-color: #ffffff; /*border: 1px solid #5bc0de;
        padding: 0px;*/
        z-index: 102;
        font-family: Arial, Verdana, Helvetica, sans-serif;
        font-size: 10pt;
    }
    .web_dialog_title
    {
        border-bottom: solid 2px #337ab7;
        padding: 4px;
        color: White;
        font-weight: normal;
        font-family: Arial, Verdana, Helvetica, sans-serif;
        font-size: 17px;
    }
</style>
<style type="text/css">
    .ui-helper-hidden-accessible
    {
        display: none;
        visibility: hidden;
    }
    .ui-autocomplete
    {
        list-style: none;
        margin: 0;
        z-index: 9999 !important;
        padding: 0;
        background: #fafafa !important;
        width: 420px;
        max-height: 400px;
        overflow: auto;
        border: 1px solid #ddd;
    }
    .ui-autocomplete li
    {
        list-style: none;
        margin: 0;
        cursor: pointer;
        padding: 5px !important;
        border-bottom: 1px solid #ddd;
    }
    .ui-autocomplete li:hover
    {
        background: #f4f4f4 !important;
    }
    .ui-autocomplete li a
    {
        font-family: Verdana;
        color: #900;
    }
    .ui-autocomplete li:hover a
    {
        color: green;
        font-weight: bold;
    }
    .ui-corner-all
    {
        color: #337ab7;
    }
    .right_bar .user .user_image img
    {
        border-radius: 28px !important;
        height: 55px !important;
        margin: 21px 0px 0 0 !important;
        position: relative !important;
        width: 58px !important;
    }
    
    
    .right_bar .user .user_image:after
    {
        content: '';
        width: 23px;
        height: 23px !important;
        background: url();
        background-size: 80% !important;
        position: absolute;
        bottom: 5px;
        right: 20px;
        color: #D8D4D8;
        font-size: 24px;
    }
    .right_bar .user .user_image
    {
        position: relative;
    }
	
    .pagination {
    display: block;
    text-align: center;
    margin: 0;
    }

    .pagination li {
    display:inline-block;
    margin: 0 5px 0 0;
    }

    .pagination li a{
    border: none;
    background: #1e90ff;
    color: #fff;
    }

    .pagination li a:hover,
    .pagination > li > a:focus{
    color:#fff;
    background:#333;
    }

</style>

<script type='text/javascript'>
    $(document).ready(function () {
        var value = $('#ctl00_header1_lbl_atdstatus').text();
        var myID = $('.right_bar .user .user_image img').attr('id');
        if (value == 'Absent') {
            $("#divPic").addClass("user_image user_imageSmall");
        }
        else {
            $("#divPic").addClass("user_image user_imagePresentSmall");

        }

    });
</script>

		<?php
		include('include/navbar.php');
		?>
 
                </td>
            </tr>
            <tr>
                <td valign="top" align="left" width="100%">
                    
    <div class="container">
        <div class="row">
            <div class="main">
                <div class="top_bar">
                    <h2>
                        View Data</h2>
                </div>
            
  
            </div>
        </div>
    </div>

      
  <div id="wrapper">
	
	<div class="container-fluid">    

 <div class="card shadow mb-12"> 
 <div class="card-header py-6">  

<div class="card-body">
<!-- <div class="text-warning text-center">
<h2>Display Data</h2>
</div>  -->
				
<div class="row">
<table class="table table-striped table-bordered">
              <thead>
                 <tr>
			     <th width="5%"><b>id</b></th>
                 <th width="15%"><b>Name</b></th>
                 <th width="15%">department</th>
                 <th width="5%">departmentLocation</th> 
				 <th width="15%"><b>contact</b></th>
                 <th width="30%"><b>email</b></th>
				<!-- <th>subject</th>-->
				<!-- <th width="30%"><b>password</b></th>  -->
				<!-- <th>Salary</th>
				 <th>Cab Facility</th> -->
				 <th width="20%">Pincode</th> 
				 
				<!-- <th width="20%"><b>Action</b></th>  -->
                 </tr>
               </thead>
               <tbody>
<?php
     include('config/require.php');
     
	 $limit = 3;
	
	 if(isset($_GET['page']))
	 {
		 $page = $_GET['page'];
	 }
	 else{
	   $page = 1;
	 }
      $offset = ($page - 1) * $limit; 	 
	   $query="select * from students order by id limit {$offset},{$limit}"; 
       $result=mysqli_query($conn,$query);
	   
	   while($row = mysqli_fetch_array($result)) {
    
	echo "<tr>";
	echo "<td>".$row["id"]."</td>";
	echo "<td>".$row["Fname"].'&nbsp'.$row["Lname"]."</td>";
	echo "<td>".$row["Department"]."</td>";
	echo "<td>".$row["DepartmentLocation"]."</td>";
	echo "<td>".$row["contact"]."</td>";
	echo "<td>".$row["email"]."</td>";
//	echo "<td>".$row["password"]."</td>";
	echo "<td>".$row["pincode"]."</td>";	
	echo "</tr>";
	   } 
// $conn->close();
  ?>
</tbody>
</table>
<?php

   $sql1 = "select * from students";
   $result1 = mysqli_query($conn,$sql1);
   
   if(mysqli_num_rows($result1) > 0){
	   
	   $total_records = mysqli_num_rows($result1);
	   
	   $total_pages = ceil($total_records / $limit);
	   
	   echo '<ul class="pagination admin-pagination">';
	   for($i=1; $i<=$total_pages; $i++){
 
        echo '<li><a href="view1.php?page='.$i.'">'.$i.'</a></li>';

	   }		   
		echo '</ul>';
	   
   }
	   
   
   $conn->close();
    ?>

</div>
</div>
</div>
</div>
</div>  
</div>
</div>
<br/>
<br/>
    <div class="footer_fix">
        Copyright &copy;
        2020
        DiGiSPICE Technologies.</div>
</body>
</html>
<?php
}
else{
	header("Location:login2.php");
}
?>