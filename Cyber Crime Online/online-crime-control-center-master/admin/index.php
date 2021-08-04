<?php 
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Online Complain system Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
	<link href="../css/mediaelementplayer.css" rel="stylesheet">
	<link href="../js/skip-back/skip-back.min.css" rel="stylesheet">      
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome Admin !</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
         </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
			
			
            <li><a href="#"><img src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			
			
			
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"></span> Manage Users</a></li>
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Manage All Complains</a>
			 
			 </li> <li><a href="index.php?page=all_only_text"><span class="glyphicon glyphicon-envelope"></span> Manage Text Complains</a></li> 
			 
			 <li><a href="index.php?page=all_only_gr"><span class="glyphicon glyphicon-envelope"></span> Manage Graphical Complains</a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page']; // RETURNS NULL VALUE WHEN LOADED FIRST
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('manage_users.php');
			
			}
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
			
			
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
			
			if($page=="text_notice")
			{
				include('text_notice.php');
			
			}
			
			if($page=="gr_notice")
			{
				include('gr_notice.php');
			
			}
			
			if($page=="all_only_text")
			{
				include('all_only_text.php');
			
			}
			
			if($page=="all_only_gr")
			{
				include('all_only_gr.php');
			
			}
			
			
		  }
		  
		  else
		  {
		  ?>
		  <!-- container end-->
		  
		  
		
		  
		  <h1 class="page-header">Admin Panel</h1>
		  
		
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-2 placeholder">
              <img src="../images/Picture ph actual.jpg" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Usamah</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-2 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Tawhid</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-2 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Rana</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-2 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Shihab</h4>
              <span class="text-muted">Something else</span>
            </div>
			<div class="col-xs-6 col-sm-2 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Hridoy</h4>
              <span class="text-muted">Something else</span>
            </div>
			<div class="col-xs-6 col-sm-2 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Pankaj</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>
		  
		  <?php } ?>
		  

         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
     <script src="../js/bootstrap.min.js"></script>	
  </body>
</html>
