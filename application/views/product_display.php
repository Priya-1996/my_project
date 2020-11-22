<!DOCTYPE html>
<html>
<head>
	<title>Product display page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<header>
	<div class="logo" style="background-color:#e6ffe6">
		&nbsp;<img src="<?php echo base_url(); ?>images/coverpaint.jpg" height="60px" ><b>PAINTING WORLD</b><br>
   </div>
   <nav class="navbar navbar-light justify-content-center" style="background-color:#ffffff;">
    <ul class="nav nav-pills">
         <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url().'index.php/MyCon'?>">Home</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url().'index.php/MyCon/search'?>">Paintings</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url().'index.php/MyCon/login'?>">Login</a>
         </li>
     </ul>
</header>
<pre>
	

</pre>
<body style="background-color: lightyellow;">
<h3><center><b><i>Here is the painting list for you</i></b></center></h3>
<pre>
<form action="<?php echo site_url('MyCon/search'); ?>" method="post">
<center><input type="text" name="pname"><input type="submit" name="Search" value="Search" style="background-color: blue; color: white;"></center>	
</form>
</pre>
<button style="background-color: green; color: white;"><a href="<?php echo base_url().'index.php/MyCon/product_list'?>" style="color: white;">ADD NEW PRODUCT</a></button>
<button style="background-color: green; color: white;"><a href="<?php echo base_url().'index.php/MyCon'?>" style="color: white;">BACK TO SIGNUP PAGE</a></button>
<pre>
	
</pre>
<table style="margin: auto;" border="1" cellspacing="0">
	<tr>
		<th>SL No.</th>
		<th><center>Painting Name</center></th>
		<th>Painting Price</th>
		<th>Availability</th>
		<th><center>Painting Look</center></th>
		<th>Creation Date</th>
		<th><center>Action</center></th>
	</tr>
<?php
$i=1;
foreach($data as $row)
{
	?>
	<tr>
		<td><center><?php echo $i; ?></center></td>
		<td><center><?php echo $row['pname']; ?></center></td>
		<td><center><?php echo $row['price']; ?></center></td>
		<td><center><?php echo $row['available']; ?></center></td>
		<td><center><img src="<?php echo base_url().$row['image'] ?>" height="200" width="200"></center></td>
		<td><center><?php echo $row['createdate']; ?></center></td>
		<td><center>
			<button><a href='editdata?id=<?php echo $row['id'] ?>'>Edit</a></button>
			<button><a href='deletedata?id=<?php echo $row['id'] ?>'>Delete</a></button></center>
		</td>
	</tr>
	<?php
	$i++;
}
?>
</table>
</body>
</html>