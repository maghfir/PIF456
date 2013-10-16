<!DOCTYPE HTML>
<html>
<head>
	<title>Studi Kasus 1</title>
</head>
<body>
	<?php
	function greeting($jam){
		if($jam < 11 AND $jam > 0){
			echo 'Selamat Pagi';
		}elseif($jam < 19 AND $jam > 0){
			echo 'Selamat Siang';
		}elseif($jam < 25 AND $jam > 0){
			echo 'Selamat Malam';
		}else{
			echo '';
		}
	}
	echo 'Sekarang Jam ' . $_POST["jam"] . ':00 WIB, ';
	greeting($_POST["jam"]);
	?>
	<br /><a href="studiKasus1.php">[BACK]</a>
</body>
</html>
