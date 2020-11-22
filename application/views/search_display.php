<!DOCTYPE html>
<html>
<head>
	<title>Display on searching</title>
</head>
<center><h3><b><u>List Based On Your Search</u></b></h3></center>
<body>
<table style="margin: auto;" border="1" cellspacing="0">
	<tr>
		<th>SL No.</th>
		<th>Painting Name</th>
		<th>Painting Price</th>
		<th>Availability</th>
		<th>Painting Look</th>
		<th>Creation Date</th>
		<th>Action</th>
	</tr>
<?php
$i=1;
foreach($result as $row)
{
	?>
	<tr>
		<td><center><?php echo $i; ?></center></td>
		<td><center><?php echo $row->pname; ?></center></td>
		<td><center><?php echo $row->price; ?></center></td>
		<td><center><?php echo $row->available; ?></center></td>
		<td><center><img src="<?php echo base_url().$row->image ?>" height="200" width="200"></center></td>
		<td><center><?php echo $row->createdate; ?></center></td>
		<td><center>
			<button><a href='editdata?id=<?php echo $row->id ?>'>Edit</a></button>
			<button><a href='deletedata?id=<?php echo $row->id ?>'>Delete</a></button></center>
		</td>
	</tr>
	<?php
	$i++;
}
?>
</table>
<pre>
	
	<button style="background-color: green; color: white;"><a href="<?php echo base_url().'index.php/MyCon/display'?>" style="color: white;">BACK TO DISPLAY PAGE</a></button>
</pre>
</body>
</html>