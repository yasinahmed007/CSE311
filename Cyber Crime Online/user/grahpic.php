<?php 
if($_SESSION['user'] == '')
	header('location:../index.php');
else{

$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."' AND (video != '0' or audio != '0' or photo != '0')");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>You didn't make any complain with evidence. Check Text Complains!!!</h2>";
}
else
{
?>
<h2>All Graphical Complains</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>		
		<th>Photo</th>
		<th>Video</th>
		<th>Audio</th>
		<th>Date</th>
		<th>Update</th>
		<th>Status</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>";
if($row['photo'] != '0'){
echo "<a class='btn btn-sm btn-primary' href='index.php?page=photo&notice_id=".$row['notice_id']."' role='button'>View Photo</a>";
}
else
{
echo "<em style='color:red;'>"."Not Available"."</em>";
}
echo "</td>";

echo "<td>";
if($row['video'] != '0'){
echo "<a class='btn btn-sm btn-success' href='index.php?page=video&notice_id=".$row['notice_id']."' role='button'>View video</a>";
}
else
{
echo "<em style='color:red;'>"."Not Available"."</em>";
}
echo "</td>";

echo "<td>";
if($row['audio'] != '0'){
echo "<a class='btn btn-sm btn-info' href='index.php?page=audio&notice_id=".$row['notice_id']."' role='button'>Listen Audio</a>";
}
else
{
echo "<em style='color:red;'>"."Not Available"."</em>";
}
echo "</td>";


echo "<td>".$row['Date']."</td>";


echo "<Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";


if($row['stat'] == false){
echo "<td style='color:red;'>"."Not Solved"."</td>";
}
else
echo "<td style='color:green;'>"."Solved"."</td>";


echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }
}
?>