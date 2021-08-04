<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Crime Compliant Section</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/typed.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>Online Crime Compliant Section</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/police-1141035_1920.jpg" alt="...">
      <div class="container">
            <div class="carousel-caption">
              <h1>Online Crime Compliant Centre</h1>
              <p>If you're you are new to our site then first sign up now.</p>
              <p><a class="btn btn-lg btn-primary" href="index.php?option=New_user" role="button">Sign up today</a></p>
            </div>
       </div>
    </div>
    <div class="item">
      <img src="images/firearm-409252_1920.jpg" alt="...">
      <div class="container">
            <div class="carousel-caption">
              <h1>Online Crime Compliant Centre</h1>
              <p>If you're you are already a member, then first sign in now.</p>
              <p><a class="btn btn-lg btn-primary" href="index.php?option=login" role="button">Just Login now</a></p>
            </div>
       </div>
    </div>
	
	 <div class="item">
      <img src="images/Desert.jpg" alt="...">
      <div class="container">
            <div class="carousel-caption">
              <h1>Online Crime Compliant Centre</h1>
              <p>If you're you are administrator, then first login.</p>
              <p><a class="btn btn-lg btn-danger" href="admin/index.php" role="button">Admin Login</a></p>
            </div>
       </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{?>
		
		
		
		
		<div class="jumbotron">	
		<h1>Complain Centre</h1>
		<p style="font-size:35px">You can <span style="color:#C82F20;"><span class="typed_another"></span></span></p>
		<p class="lead">Just Sign Up and File your complain</p>
        <p><a class="btn btn-lg btn-success" href="index.php?option=New_user" role="button">Sign up today</a></p>
		</div>
		
		
		
        <div class="jumbotron" style="overflow:hidden">
        <h2>Login Panel </h2>
			<div class="col-sm-6">
				<div class="panel panel-primary">
				<div class="panel-heading">User Login</div>
				<div class="panel-body"><a class="btn btn-lg btn-success" href="index.php?option=login" role="button">User Login</a></div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-primary">
				<div class="panel-heading">Admin Login</div>
				<div class="panel-body"><a class="btn btn-lg btn-danger" href="admin/index.php" role="button">Admin Login</a></div>
				</div>
			</div>
		</div>
      

     
		<?php
		} ?>
		
		
		
		
		
		</div>
	<!-- container -->
		
		<div class="col-sm-4">
		<div class="row">
        <div class="jumbotron">
        <h2>Features </h2>
			<div class="col-sm-12">
				<div class="panel panel-primary">
				<div class="panel-heading">Text Complain</div>
				<div class="panel-body">Write your Text complain</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="panel panel-primary">
				<div class="panel-heading">Video Evidence</div>
				<div class="panel-body">Upload your Video Evidence</div>
				</div>
			</div>
		</div>
      </div>
	  
	  
	  <div class="row">
        <div class="jumbotron">
			<div class="col-sm-12">
				<div class="panel panel-primary">
				<div class="panel-heading">Photo Evidence</div>
				<div class="panel-body">Upload your Photo Evidence</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="panel panel-primary">
				<div class="panel-heading">Audio Evidence</div>
				<div class="panel-body">Upload your Audio Evidence</div>
				</div>
			</div>
		</div>
      </div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="#"> Developed by  Cou_Group_2</a></li>
      
	</ul>
<script>

var typed = new Typed('.typed_another', {
  strings: ["write your Text Complain", "upload your Photo Evidence", "upload your Video Evidence","upload your Audio Evidence", "see your Complain Status also."],
  typeSpeed: 70,
  backSpeed: 40,
  backDelay: 500,
  showCursor:true,
  loop:true,
  smartBackspace:false,
  startDelay:1000,
});
</script>



</div>
</nav>
<!-- footer-->



	</body>
</html>