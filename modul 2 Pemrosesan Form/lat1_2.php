<!DOCTYPE HTML>
<html>
<head>
	<title>Metode POST</title>
</head>

<body>
	
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Naama
	<input type="text" name="nama" /> <br />
	
	<input type="submit" value="OK" /> <br />
	</form>
	
	<?php
	if (isset($_POST['nama'])){
		echo 'Hallo, ' . $_POST['nama'];
}
?>
</body>
</html>