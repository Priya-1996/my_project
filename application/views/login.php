<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
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
             <a class="nav-link active" href="<?php echo base_url().'index.php/MyCon/login'?>">Login</a>
         </li>
     </ul>
</header>
<body style="background-color: lightyellow;">
<h2><center>Please fill with correct Email Address and Password to Login.</center></h2>
<form method="post">
	<table border="1" style="margin: auto;" cellpadding="10" cellspacing="0">
		<tr>
			<td><b><i>Your email address</i></b></td>
		<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td><b><i>Your password</i></b></td>
		<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="Login" value="Login"></center></td>
		</tr>
	</table>
</form>
</body>
</html>