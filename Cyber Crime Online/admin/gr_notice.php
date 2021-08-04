<?php 
include('../connection.php');
$nid=$_GET['notice_id'];
$q=mysqli_query($conn,"select * from notice where notice_id=$nid");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>Something Wrong</h2>";
}
else
{
$row=mysqli_fetch_assoc($q);
$us = $row['user'];


?>

<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-10">
			<div class="jumbotron">
				<h2>Complain Details</h2>
					<p class="well well-lg" style="background-color:#f5f2d0"><?php echo $row['Description']; ?></p><br><br>
					<p><a class="btn btn-lg btn-success" href="index.php?page=notification" role="button">View All</a></p>
			</div>
		</div>
	</div>
	
	<?php if($row['video']!== '0'){ 
		$po = $row['video'];
		$v = "../images/$us/video/$po";
	?>
		<div class="row">
		<div class="col-sm-10">
			<div class="jumbotron">
				<h2> Video</h2>
					 <video width="852" height="480">
						<source src="<?php echo $v?>" alt="...">
					</video><br><br>
					<p><a class="btn btn-lg btn-success" href="index.php?page=notification" role="button">View All</a></p>
			</div>
		</div>
		</div>
	<?php } ?>
	
	<?php if($row['audio']!== '0'){ 
		$po = $row['audio'];
		$v = "../images/$us/audio/$po";
	?>
		<div class="row">
		<div class="col-sm-8">
			<div class="jumbotron">
				<h2>Audio</h2>
					 <audio>
					<source src="<?php echo $v?>">
					</audio><br><br>
					<p><a class="btn btn-lg btn-success" href="index.php?page=notification" role="button">View All</a></p>
			</div>
		</div>
		</div>
	<?php } ?>
	
	<?php if($row['photo']!== '0'){
		$po = $row['photo'];
		$v = "../images/$us/photo/$po";

	?>
	
		<div class="row">
		<div class="col-sm-8">
			<div class="jumbotron">
				<h2> Photo</h2>				
					<div class="thumbnail">
						<img class="" height="500" width="500" src="<?php echo $v?>" alt="...">
						<h4>Photo Evidence</h4>
						<p>Shown from the account <?php echo $us; ?></p>
					</div>					 
					<p><a class="btn btn-lg btn-success" href="index.php?page=notification" role="button">View All</a></p>
			</div>
		</div>
		</div>
	
	<?php } ?>
	
	<div class="row">
		<div class="jumbotron">
				<h2>Details Information</h2>
		<div class="col-sm-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Subject</div>
			<div class="panel-body"><?php echo $row['subject']; ?></div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="panel panel-primary">
			<div class="panel-heading">User</div>
			<div class="panel-body"><?php echo $row['user']; ?></div>
			</div>
		</div>
		
		<div class="col-sm-3">
			<div class="panel panel-primary">
			<div class="panel-heading">Time</div>
			<div class="panel-body"><?php echo $row['Date']; ?></div>
			</div>
		</div>
		
		<div class="col-sm-2">
			<div class="panel panel-primary">
			<div class="panel-heading">Status</div>
			<div class="panel-body">
				<?php if($row['stat'] == false){
				echo "<span style='color:red;'>"."Not Solved"."</span>";
					}
				else
					echo "<span style='color:green;'>"."Solved"."</span>";?>
					
			</div>
				
			</div>
		</div>
	</div>
	</div>
</div>
			

	<script src="../js/jquery.js"></script>
	<script src="../js/mediaelement-and-player.min.js"></script>
	<script src="../js/skip-back/skip-back.min.js"></script>
	<script src="../js/skip-back/skip-back-i18n.js"></script>
	<script>
      $('video,audio').mediaelementplayer({
        features: ['playpause', 'current','tracks', 'progress','volume','skipback','duration','fullscreen'],
        startLanguage: 'en',
        skipBackInterval: 4,
	});
	</script>
	
<?php } ?>