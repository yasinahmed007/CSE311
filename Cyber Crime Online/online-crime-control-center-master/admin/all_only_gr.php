<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
	
	function Statu(id,value){
		if(confirm("You want to update the status?"))
		{
		window.location.href="status.php?id="+id+"&value="+value;
		}
		}
</script>
<?php 
$q=mysqli_query($conn,"select * from notice where video != '0' or audio != '0' or photo != '0'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Complain found !!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">All Graphical Complains</h2>

<table class="table table-bordered">
	
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>		
		<th>User</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Status</th>
		<th>Details</th>
		
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['user']."</td>";
echo "<td>".$row['Date']."</td>";
if($row['audio']=='0' && $row['video']=='0' && $row['photo']=='0' ){
	$dat = 'text_notice';
}
else{
	$dat= 'gr_notice';
}

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>

<Td><button id="st" class="button" onclick="Statu('<?php echo $row['notice_id']; ?>','<?php echo $row['stat']; ?>')"><?php 
if($row['stat'] == false){
echo "<span style='color:red;'>"."Not Solved"."</span>";
}
else
echo "<span style='color:green;'>"."Solved"."</span>";
?></button></td>
<td>
<?php echo "<a class='btn btn-md btn-success' href='index.php?page=$dat&notice_id=".$row['notice_id']."' role='button'>Click</a>";
?>
</td>
<?php
echo "</Tr>";
$i++;
}
?>


		
</table>
<?php }?>

