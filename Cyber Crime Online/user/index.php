<?php 
session_start();
include('../connection.php');
if($_SESSION['user'] == '')
	header('location:../index.php');
else
	$user= $_SESSION['user'];
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
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

    <title>Online Crime Compliant User Dashboard</title>

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
          <a class="navbar-brand" href="#">Hello <?php echo $users['name'];?></a>
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
			
			<!-- check users profile image -->
			<?php 
			$q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")
			{
			?>
            <li><a href="index.php?page=update_profile_pic"><img title="Update Your profile pic Click here" style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			else
			{
			?>
			<li><a href="index.php?page=update_profile_pic"><img title="Update Your profile pic Click here"  style="border-radius:50px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			?>
			
			
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=update_profile"><span class="glyphicon glyphicon-user"></span> Update Profile</a></li>
			
			<li><a href="index.php?page=add_notice"><span class="glyphicon glyphicon-envelope"></span> Add new complain</a></li>
			
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Text Complains</a></li>
			 
			 
			 
			 <li><a href="index.php?page=grahpic"><span class="glyphicon glyphicon-envelope"></span> Complains with Evidence</a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
			if($page=="notification")
			{
				include('notification.php');
			
			}
			if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			if($page=="update_profile_pic")
			{
				include('update_profile_pic.php');
			
			}
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
			if($page=="update_notice")
			{
				include('update_notice.php');
			
			}
			if($page=="grahpic")
			{
				include('grahpic.php');
			
			}
			
			if($page=="video")
			{
				include('video.php');
			
			}
			
			if($page=="photo")
			{
				include('photo.php');
			
			}
			
			if($page=="audio")
			{
				include('audio.php');
			
			}
		  }
		  else
		  {
		  include('all_complain.php');
		  ?>
		  <!-- container end-->
		   
		  
		  
		  
		  
<?php } ?>
          
         
        </div>
      </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>	
    </body>
</html>
