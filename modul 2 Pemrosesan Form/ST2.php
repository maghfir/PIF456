<!DOCTYPE HTML>
<html>
<head>
	<title>Data Checkbox Preselecting</title>
</head>

<body>
	
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Bangun Ruang
		<input type="checkbox" name="bangun_ruang[]" value="Kubus"checked
		/>Kubus
		
		<input type="checkbox" name="bangun_ruang[]" value="Balok"
		/>Balok
		
		<input type="checkbox" name="bangun_ruang[]" value="Kerucut"
		/>Kerucut
		<br />
		<input type="submit" value="ok" />
		
	</form>
	
	<?php
	//Ekstraksi Nilai
	if (isset($_POST['bangun_ruang'])){
		foreach ($_POST['bangun_ruang'] as $key => $val){
			echo $key . ' -> ' .$val . '<br />';
		}
	}
	?>

</body>
</html>