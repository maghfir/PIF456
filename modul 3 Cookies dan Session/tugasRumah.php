<!DOCTYPE html> 
<html> 
 
<head> 
  <title>Halaman Administrator</title> 
  <style type="text/css"> 
  		.border {
		border: 2px solid blue;
		margin: auto;
		width: 300px;
		height: 300px;
		margin-top:100px;
		}

		
		--> 
 
  </style > 
</head> 
 
<body> 
 
<?php 
session_start();
if(isset($_SESSION['user'])){
	$user = $_SESSION['user'];
	echo	'<p align="right">
			<a href="code.php">Logout</a>
			'.$user.'
			</p color="red">
			<div class="border">
			<p align="center">
			<font color="blue" size="5">
			Selamat Datang Admin <br/><br/>
			<br/><br>
			</font>
			</p>
			</div> 
			
			';
	} else {
		header('location:code.php');
		exit;
	}
?>
</body>
</html>