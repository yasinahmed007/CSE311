<?php 
if($_SESSION['user'] == '')
	header('location:../index.php');
else{
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
$po = $row['video'];
$v = "../images/$us/video/$po";
?>

<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-10">
			<div class="jumbotron">
				<h2>Complain Details</h2>
					<p class="well well-lg" style="background-color:#f5f2d0"><?php echo $row['Description']; ?></p><br><br>
					<p><a class="btn btn-lg btn-success" href="index.php?page=grahpic" role="button">View All</a></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10">
			<div class="jumbotron">
				<h2> Video</h2>
					 <video width="852" height="480">
						<source src="<?php echo $v?>" alt="...">
					</video><br><br>
					<p><a class="btn btn-lg btn-success" href="index.php?page=grahpic" role="button">View All</a></p>
			</div>
		</div>
	</div>
</div>


<script src="../js/jquery.js"></script>
<script src="../js/mediaelement-and-player.min.js"></script>
<script src="../js/skip-back/skip-back.min.js"></script>
<script src="../js/skip-back/skip-back-i18n.js"></script>
<script>
      $('video').mediaelementplayer({
        features: ['playpause', 'current','tracks', 'progress','volume','skipback','duration','fullscreen'],
        startLanguage: 'en',
        skipBackInterval: 4
      });
</script>

<?php } 
}
?>