<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
</head>
<body>

<div class="container-fluid">
					<div class="text-warning text-center">
					<h3>Attendance Portal</h3>
					</div>	
                 <div class="right_col" role="main" style="min-height:100px">
		  		<div class="row"> 
				
				<div class="col-md-4 col-sm-12 col-xs-12 form-group">
				<td align='center'><b>Name:</b></td>
				<td><select class="form-control" id="name" name="name">
				<option value>select</option>	
				<?php
				$conn=mysqli_connect("localhost:3306","root","","hr");
				
				echo $query = "select name from attendance";
        $result = mysqli_query($conn,$query);
	   
	   while($row = mysqli_fetch_assoc($result)) {
				
						  echo "<option value='$row[name]'>$row[name]</option>";						
					  }
                ?>
				</select></td>
					  </div>
				
				
					  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
					<td align='center'><b>From Date:</b></td>
				      <td><select class="form-control" id="from_date" name="from_date">
				    <option value>select</option>	
				<?php				
				$conn=mysqli_connect("localhost:3306","root","","hr");

				    function query($sql, $condition=null){
	            global $conn;
                }
				
				$query = "select attendance_date from attendance order by attendance_date";
                $result = mysqli_query($conn,$query);
	   
	            while($row = mysqli_fetch_assoc($result)) {
				
						  echo "<option value='$row[attendance_date]'>$row[attendance_date]</option>";						
					  }
                ?>		
					  </select></td>
					  </div>	  
						</div>
						</div>
						</div>


<div class="row">
	 
	<div id ='dataContainer'>
										  
	</div>
   </div>


<script type="text/javascript">
            function displayVals(){
			var nameValues = $( "#name" ).val();
			var fromValues = $( "#from_date" ).val();
			
			var url = "attedance.php?name=" + nameValues + "&from=" + fromValues;
			console.log(url);
			$.ajax({
				url: url,
				success:function(response)
				{
			        $("#dataContainer").html(response);
				},
				
				error: function(errorReason){
					alert(errorReason);
				}
			});
		}
		$("select").change(displayVals);
		displayVals();
		</script>

</body>
</html>