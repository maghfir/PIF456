<!DOCTYPE HTML>
<html>
<head>
	<title>Data Seleksi Preselecting</title>
</head>

<body>
	
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Aliran musik
	<select name="musik">
		<option value="Pop">Pop
		<option value="Melayu">Melayu
		<option value="Rock"selected>Rock
		<option value="R & B">R & B
	</select> <br />
	
	<input type="submit" value="ok" />
	</form>
	
	<?php
		if (isset($_POST['musik'])) {
			echo $_POST['musik'];
	}
	?>
	
</body>
</html>