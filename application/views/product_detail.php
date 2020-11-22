<!DOCTYPE html>
<html>
<head>
	<title>Product list</title>
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
<body style="background-color: lightyellow;">
	<pre>
		

	</pre>
	<h2><center><b><i>Fill this list to add new product.</i></b></center></h2>
	<pre>
		

	</pre>
<form method="post" enctype="multipart/form-data">
	<table border="1" style="margin: auto;" cellpadding="10" cellspacing="0">
		<tr>
			<td><b><i>Product name</i></b></td>
		<td><input type="text" name="pname"></td>
		</tr>
		<tr>
			<td><b><i>Product price</i></b></td>
		<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td><b><i>Product Availability</i></b></td>
		<td><select name="available">
			<option>Yes</option>
			<option>No</option>
		</select></td>
		</tr>
		<tr>
			<td><b><i>Product Image</i></b></td>
		<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td><b><i>Creation Date</i></b></td>
		<td><input type="date" name="date"></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="Add" value="Add"></center></td>
		</tr>
	</table>
	<pre>
		

	</pre>
</form>
</body>
</html>