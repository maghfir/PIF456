<!DOCTYPE HTML>
<html>
<head>
	<title>Generate Tabel</title>
	<style type="text/CSS">
	table {border-collapse: collapse; width: 100%; margin: 0; padding: 0; border: 1px solid #DEDEDE; border-right: none; font-size: 14px; background: #F5F5F5}
	td {margin: 0; padding: 8px; border: 1px solid #DEDEDE}
	</style>
</head>
<body>
	<?php
	$hitungan = 1;
	$sel = $_POST["sel"];
	$kolom = $_POST["kolom"];
	$baris = ceil($sel / $kolom);
	echo '<table>';
			for($a = 0; $a < $baris; $a++){
		echo '<tr>';
		for($b = 0; $b < $_POST["kolom"]; $b++){
			if($hitungan != NULL){
				echo '<td><center>' . $hitungan . '</center></td>';
				if ($hitungan < $sel AND $hitungan != NULL){
					$hitungan = $hitungan +1;
				}else{
					$hitungan = NULL;
				}
			}
		}
		echo '</tr>';
	}
	echo '</table>';
	?>
	<br /><a href="kasus1.php">[KEMBALI]</a>
</body>
</html>
