<?php 
if($_SESSION['user'] == '')
	header('location:../index.php');
else{

$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."' AND (video = '0' and audio = '0' and photo = '0')");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>You didn't make any text complain !!!</h2>";
}
else
{
?>
<h2>All Text Complains</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
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
echo "<td>".$row['Description']."</td>";
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