
<?php
include "connection.php";
session_start();
session_unset();

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>RECESS </title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
    <link href="assetsindex/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assetsindex/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="assetsindex/css/font-awesome-animation.css" rel="stylesheet" />
     <!--PRETTYPHOTO MAIN STYLE -->
    <link href="assetsindex/css/prettyPhoto.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
	   
<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
    <link href="assetsindex/css/style.css" rel="stylesheet" />
	 <link href="assetsindex/css/blink.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
});

</script>    
</head>
<body >
         <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
  
            <a  style="position:fixed; top:7 px; left:30px;" href="#"><img src="imgs/recess.png" ></a>
       
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                     <li>	
						<form name="loginform" class="form-inline" style="padding-top: 10px; font-family:'Open Sans', sans-serif;" action="signin.php" method="post">
							<div class="form-group">
								<label style="color:white ;">USER NAME:</label>						
								<input type="text" class="form-control" autofocus style="color:white; " name="username" required></input>
							</div>
							<div class="form-group">
								<label style="color:white;" >PASSWORD:</label>
								<input type="password" class="form-control" name="password" autofocus required></input>
							</div>
							<div class="form-group">
							<button type="submit" class="btn btn-default" name = "login" id="login" value="login" style="font-size:20px;">LOGIN</button> 
								
							</div>
						</form>
				
					 </li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
    <div id="home-sec">

	
    <div class="container-fluid" >
	
	<div class="row">
	
		<div class="col-md-5 ">
        <div class="row text-center">
		<br>
	<br>
	<br>
	<br>
	<br>
	<br>
            <div  class="col-md-12" >
                <span class="head-main"  >RECESS</span>
                <h1 class="head-sub-main"  style="color:white">SOLUTION TO ALL YOUR ACADEMIC PROBLEMS!</h1>
				
               
			   <!-- <h3 class="head-last col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3">Lorem ipsum dolor sit ametLorem</h3>-->
               
                <a  href="#services-sec">
                 <img src="imgs/arrow.png">
                    </a>
            </div>
        </div>
		</div>
		<div class="col-md-7" >
			
				<form class="form-horizontal" role="form" action="InsertData.php"  method="post">
					<h2 style="color:white">Registration</h2>
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label label-lg" style="font-size:20px;text-align:left;">Full Name</label>
						<div class="col-sm-9">
						
							<input type="text" id="name" name="name" placeholder="Full Name" class="form-control" autofocus required>
							<span class="help-block" style="color:white;font-size:20px;">Last Name, First Name, eg.: Smith, Harry</span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label"style="font-size:20px;text-align:left">User Name</label>
						<div class="col-sm-9">
							<input type="text" id="username"  name="username" placeholder="User Name" class="form-control" autofocus required>
							
						</div>
					</div>
					
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label label-lg" style="font-size:20px;text-align:left;">Email</label>
						<div class="col-sm-9">
							<input type="email" id="email" name="email" placeholder="Email" class="form-control input-lg" required>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label label-lg" style="font-size:20px;text-align:left;">Password</label>
						<div class="col-sm-9">
							<input type="password" id="password" name="password" placeholder="Password" class="form-control input-lg" required>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label for="birthDate" class="col-sm-3 control-label label-lg" style="font-size:20px;text-align:left;padding-right:0px">Date of Birth</label>
						<div class="col-sm-9">
							<input type="date" id="dob" name="dob" class="form-control input-lg" required>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label class="control-label col-sm-3"style="font-size:20px;text-align:left">Gender</label>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-4">
									<label class="radio-inline"style="font-size:20px;padding-left: 60px">
										<input type="radio" id="gender"  name="gender" value="F">Female
									</label>
								</div>
								<div class="col-sm-4">
									<label class="radio-inline" style="font-size:20px; padding-left: 100px;">
										<input type="radio" id="gender"  name="gender" value="M">Male
									</label>
								</div>
							</div>
						</div>
					</div> <!-- /.form-group -->
					<br>
					
					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-5" style="text-align:left;">
							<div class="checkbox">
								<label style="font-size:20px">
									<input type="checkbox" required>I accept <a href="#">terms</a>
								</label>
							</div>
						</div>
					</div> <!-- /.form-group -->
					<br>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" value="Submit" name="Submit" id="Submit" class="btn btn-default btn-block"style="font-size:20px;">Register</button>
						</div>
					</div>
				</form> <!-- /form -->
        </div> 
	</div>
	<br>
	<br>
	<br>
	<br>

	<br>
</div>

</div>  

		<div>
			
		</div>
    </div>

    </div>
    
    <!--END HOME SECTION-->  

    <!--SERVICES SECTION-->    
    <section  id="services-sec">
        <div class="container">
		
            
             <h1 class="g-pad-bottom">  <i class="fa fa-crosshairs "></i> YOU CAN  </h1>
                <div class="text-center g-pad-bottom">
				<div class="row ">
                
                    <div class="col-md-6 col-sm-6">
                            <img src="imgs/c.jpg"style="width:150px;height:150px;" >
                            <h4><i>Manage your Attendance!</h4></i>
                            <p>
							<b><i>Having troubles keeping count of the number of lectures you bunked?</b></i></p>
							<p><b><i>We provide you a personalised manager to take care of all your lecture schedules.</b></i></p>
                            
                            
                    </div>
					<div class="col-md-6 col-sm-6">
                            <img src="imgs/a.png"style="width:150px;height:150px;" >
                            <h4><i>Analyze your Marks!</h4></i>
							<p><b><i>Want to know where you're lagging?</b></i></p>
							<p><b><i>We provide a graphical anaysis of your examination marks to help you improve.</b></i></p>
                           	<br>
							<br>
                            
                    </div>
				</div>
				 <div class="row ">
                    <div class="col-md-6 col-sm-6">
                            <img src="imgs/b.jpg"style="width:150px;height:150px;" >
                            <h4><i>Organize your Assignments!</h4></i>
							<p><b><i>Want to know where you're lagging?</b></i></p>
		
							<p>
							<b><i>We provide a graphical anaysis of your examination marks to help you improve.</b></i>
                            </p>
                            
                    </div>
                   
                    <div class="col-md-6 col-sm-6">
                            <img src="imgs/d.jpg"style="width:150px;height:150px;" >
                            <h4>Get in Touch!</h4>
                            <p>
                             <b><i>Have exam time doubts?</b></i>
							 </p>
							 <p><b><i>We provide you a forum to interact wiht your teachers for any help.</b></i>
                            </p>
                          
                    </div>
                </div>
            </div>
				  
        </div>   
   </section>

    <!--FOOTER SECTION -->
    <div id="footer">
        www.RECESS.com | All Right Reserved  
         
    </div>
    <!-- END FOOTER SECTION -->
	<script>
		 !-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  --
		!-- CORE JQUERY 
		script src=assetspluginsjquery-1.10.2.jsscript
		!-- BOOTSTRAP CORE SCRIPT  
		script src=assetspluginsbootstrap.min.jsscript  
		 !-- ISOTOPE SCRIPT   
		script src=assetspluginsjquery.isotope.min.jsscript
		!-- PRETTY PHOTO SCRIPT   
		script src=assetspluginsjquery.prettyPhoto.jsscript    
		!-- CUSTOM SCRIPTS 
		script src=assetsjscustom.jsscript--
	</script>

   

</body>
</html>
