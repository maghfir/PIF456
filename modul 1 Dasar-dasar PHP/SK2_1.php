<!DOCTYPE HTML>
<html>
<head>
	<title>Studi Kasus 2</title>
	<style type="text/CSS">
	table {border-collapse: collapse; width: 100%; margin: 0; padding: 0; border: 1px solid #DEDEDE; border-right: none; font-size: 14px; background: #F5F5F5}
	td {margin: 0; padding: 8px; border: 1px solid #DEDEDE}
	</style>
</head>
<body>
	<?php
	echo '<table>';
	for($a = 0; $a < $_POST["baris"]; $a++){
		echo '<tr>';
		for($b = 0; $b < $_POST["kolom"]; $b++){
			echo '<td><center>' . ($a + 1) . ':' . ($b +1) . '</center></td>';
		}
		echo '</tr>';
	}
	echo '</table>';
	?>
	<br /><a href="SK2.php">[KEMBALI]</a>
</body>
</html>
