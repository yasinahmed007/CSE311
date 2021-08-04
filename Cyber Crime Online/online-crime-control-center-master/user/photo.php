<?php 

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
$po = $row['photo'];
$v = "../images/$us/photo/$po";
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
		<div class="col-sm-8">
			<div class="jumbotron">
				<h2> Photo</h2>				
					<div class="thumbnail">
						<img class="" height="500" width="500" src="<?php echo $v?>" alt="...">
						<h4>Photo Evidence</h4>
						<p>Shown from the account <?php echo $us; ?></p>
					</div>					 
					<p><a class="btn btn-lg btn-success" href="index.php?page=grahpic" role="button">View All</a></p>
			</div>
		</div>
	</div>
</div>



 <?php }

 ?>