	<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"> 

      <nav class="navbar navbar-default" id="header">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="front.php"><!--<img src="images/digispice_logo.png" /> --><h4>CRUD PORTAL</h4></a>  
		</div>
        
           
      <div id="navbar" class="navbar-collapse collapse main_menu">
        <ul class="nav navbar-nav">
          <li><a class="" href="front.php"> My Space</a></li>
          <li><a href="#">Employee</a>
          	<div class="sub_menu">
            	<ul>
                <?php
				if(($_COOKIE['type']=="auth"))
					{
				?>
                <li><a href="index1.php">Create Authentication</a></li>
				<?php
					}
                if(($_COOKIE['type']=="auth"))
					{
                ?>
                <li><a href="view.php">Read Authentication</a></li>
                <?php
					}
			     else
					{
				?>
                 <li><a href="view1.php">View Authentication</a></li>
                <?php
					}
					?>
				</ul>
				
            </div>
          </li>
		  <?php
//		  if(($_COOKIE['type']=="guest"))
 //    {


	?>
       <!--   <li><a href="#">HR</a>
			<div class="sub_menu">
				<ul>
				<li><a href="createevent.php">Create Event</a></li>
				
				<li><a href="viewevent.php">View Event</a></li>
				
				</ul>
			</div>
          </li>   -->
	
  <!--        <li><a href="#">Admin</a>
		
		  </li>
         
        
      

            <li> <a href="#">H.O.D</a>
		
		  </li>   -->
		  <?php
//  }
?>
          <li><a href="logout.php">Logout</a>
		
		  </li>
       </nav>
	    </div>
    
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="right_bar">
                <div class="user" style="background-color: #fff;">
                    <div class="box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div id="divPic">
                                    <img id="ctl00_header1_img_user" src="images/no_image.jpg" style="border-width:0px;" />
                                    <div class="logout-menu">
                                        <div class="user_img">
                                            <img id="ctl00_header1_img_nuser" src="images/no_image.jpg" style="border-width:0px;" />
                                        </div>
                                        <div class="info">
                                            <span class="user_n">
                                                <?php echo $_COOKIE["user"]; ?></span> <!-- <span class="user_e">
                                                    himanshi.gupta@digispice.com</span> -->
                                        </div>
                                        <div class="links">
                                        <!--    <a href="//kmp.digispice.com/Personal_Details.aspx" class="user_btn">Manage Profile
                                            </a>--><a href="logout.php" class="user_btn right">Logout</a></div>
                                    </div>
                                </div>
                            </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <h3 style="color: #337ab7; font-weight: bold; font-size: 14px; margin-top: 40px;
                                    margin-bottom: 5px;">
                                    <span id="ctl00_header1_lbl_name"><?php echo $_COOKIE["user"]; ?></span></h3>
                                <span class="attendance present" style="display: none;">
                                    <span id="ctl00_header1_lbl_atdstatus">Present</span></span> <i style="display: none;">
                                        <span id="ctl00_header1_empst"></span>
                                    </i><span style="color: #000; font-weight: normal; font-family: Arial, Verdana, Helvetica, sans-serif;
                                        font-size: 13px; font-style: italic; font-style: italic;"><a href="#inline_DecinedForm"
                                            class="inlineDecline" style="cursor: pointer; color: Black;"></a>
                                        
                                    </span>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
