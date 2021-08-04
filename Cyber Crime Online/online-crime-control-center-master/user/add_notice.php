<?php
$user= $_SESSION['user'];
?>

<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $user=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		
		$photoName = 0;
		$vidName = 0;
		$audioName = 0;
		//photo
		if(is_uploaded_file($_FILES['photo']['tmp_name'])){
			$photoName=$_FILES['photo']['name'];
			if(!file_exists("../images/$user/photo"))
				mkdir("../images/$user/photo");
			if(!file_exists("../images/$user/photo/$photoName"))
				move_uploaded_file($_FILES['photo']['tmp_name'],"../images/$user/photo/".$_FILES['photo']['name']);
			else
				$err1="<font color='red'>Photo name exist</font>";	
		}
		
		
		//vid
		if(file_exists($_FILES['vid']['tmp_name'])){
			$vidName=$_FILES['vid']['name'];
			if(!file_exists("../images/$user/video"))
				mkdir("../images/$user/video");
			if(!file_exists("../images/$user/video/$vidName"))
				move_uploaded_file($_FILES['vid']['tmp_name'],"../images/$user/video/".$_FILES['vid']['name']);
			else
				$err2="<font color='red'>Video name exist</font>";	
		}
		
		
		if(file_exists($_FILES['audio']['tmp_name'])){
			$audioName=$_FILES['audio']['name'];
			if(!file_exists("../images/$user/audio"))
				mkdir("../images/$user/audio");
			if(!file_exists("../images/$user/audio/$audioName"))
				move_uploaded_file($_FILES['audio']['tmp_name'],"../images/$user/audio/".$_FILES['audio']['name']);
			else
				$err3="<font color='red'>Audio name exist</font>";
		}
		
		
		mysqli_query($conn,"insert into notice values('','$user','$sub','$details',now(),0,'$photoName', '$vidName', '$audioName')");
		
		
		
		
		
		
		$err="<font color='green'>Complain added Successfully</font>";	
	}
}

?>
<h2>Add New Complain</h2>
<form method="post" enctype="multipart/form-data">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?><br><?php echo @$err1;?><br><?php echo @$err2;?><br><?php echo @$err3;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Upload Photo Evidence (If any)</div>
		<div class="col-sm-5">
		<input class="form-control" type="file" name="photo" accept="image/*"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Upload Video Evidence (If any)</div>
		<div class="col-sm-5">
		<input class="form-control" type="file" name="vid" accept="video/mp4"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Upload Audio Evidence (If any)</div>
		<div class="col-sm-5">
		<input class="form-control" type="file" name="audio" accept="audio/mp3"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Complain" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	