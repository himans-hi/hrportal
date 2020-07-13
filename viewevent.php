<?php
//print_r($_COOKIE);
//include('validate.php');
if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}
 
if(($_COOKIE['type']=="admin")||($_COOKIE['type']=="hr")||($_COOKIE['type']=="hod"))
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
                        Display Event</h2>
                </div>
            
  </div>
  </div>
  </div>
       

      
  <div id="wrapper">
	
	<div class="container-fluid">  
<div class="card-body">

			
<div class="row">
<table class="table table-striped table-bordered">
              <thead>
                 <tr>
			     <th width="5%">id</th>
                 <th width="5%">event title</th>
                 <th width="5%">sub title</th>
                 <th width="5%">comments</th>
				 <th width="5%">Requirements</th>
                 <th width="5%">Terms& Condition</th>
				 <th width="5%">Event Date Organise</th>
				 <th width="5%">Image</th>
				 <th width="5%">Action</th>
                 </tr>
               </thead>
               <tbody>
<?php

  ini_set('display_error', 'All');

include('config/require.php'); 
 
 $query="select * from create_event order by id"; 
       $result=mysqli_query($conn,$query);
	   
	   while($row = mysqli_fetch_array($result)) {
    
	echo "<tr>";
	echo "<td>".$row["id"]."</td>";
	echo "<td>".$row["event_title"]."</td>";
	echo "<td>".$row["sub_title"]."</td>";
	echo "<td>".$row["comment"]."</td>";
	echo "<td>".$row["requirements"]."</td>";
	echo "<td>".$row["terms"]."</td>";
	echo "<td>".$row["event_date"]."</td>";
    echo "<td><a href='uploaded/$row[image]'><img src='uploaded/".$row['image']."' height='40' width='50'/></a></td>";
	echo "<td width=950>";
	echo  '<a class="glyphicon glyphicon-pencil" href="editevent.php?id='.$row['id'].'"></a>';
	?>
	&nbsp&nbsp
	<?php
	echo '<a class="glyphicon glyphicon-envelope" href="mail3.php?id='.$row['id'].'"></a>';
    ?>
	&nbsp&nbsp;
	<?php
    echo  '<a class="glyphicon glyphicon-trash" href="deleteevent.php?id='.$row['id'].'" onClick="return confirmation()"></a>';
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
 
   </br>
  <!-- End of Page Wrapper -->

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