<html>  
 <head>  
  <title>Live Username Available or not By using PHP Ajax Jquery</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <style>  
  body  
  {  
   margin:0;  
   padding:0;  
   background-color:#f1f1f1;  
  }  
  .box  
  {  
   width:800px;  
   border:1px solid #ccc;  
   background-color:#fff;  
   border-radius:5px;
   margin-top:36px;  
  }  
  </style>  
 </head>  
 <body>  
  <div class="container box">  
   <div class="form-group">  
    <h3 align="center">Live Username Available or not By using PHP Ajax Jquery</h3><br />  
    <label>Enter Username</label>  
    <input type="text" name="fname" id="fname" class="form-control" placeholder="enter first name"/>
    <span id="availability"></span>
    <br /><br />
    <button type="submit" name="submit" id="submit" class="btn btn-info" disabled>submit</button>
    <br />
   </div>  
   <br />  
   <br />  
  </div>  
 </body>  
</html>  
<script>  
 $(document).ready(function(){  
   $('#fname').blur(function(){

     var fname = $(this).val();

     $.ajax({
      url:'check2.php',
      method:"POST",
      data:{fname:fname},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger">Username not available</span>');
        $('#submit').attr("disabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success">Username Available</span>');
        $('#submit').attr("disabled", false);
       }
      }
     })

  });
 });  
</script>
