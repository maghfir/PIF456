<html>

<head>
<title>Menciptakan Database</title>
</head>
<body>
<?php
require "koneksi.php";
echo '<br/>';
$res = mysql_query("CREATE TABLE mahasiswa (
nim VARCHAR(12) NOT NULL,
nama VARCHAR(40) NOT NULL,
prodi VARCHAR(100),
PRIMARY KEY(nim))");
if($res) {
echo '<br/>';
echo 'Tabel Dibuat';
} else {
echo mysql_error();
}
?>

</body>
</html>