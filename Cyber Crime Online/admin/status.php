<?php 
include('../connection.php');
$nid=$_GET['id'];
$val=$_GET['value'];
if($val==0){$val=1;}
else $val=0;
mysqli_query($conn,"update notice set stat='$val' where notice_id='$nid'");
header('location:index.php?page=notification');
?>