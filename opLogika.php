<html>
<title> Contoh Operasi Logika </title>
<head>Operasi Logika<head>
<body>
<?php

$f = 9;
$k = 4;

echo "<br>a = 9 </br>";
echo "<br>b = 4 </br>";
if ($f == 9 &&  $k == 4)
 
{echo"<br> jika a = 9 dan b = 4 maka a && b = Data Benar </br>";} // jika Kedua sama
 
else
    {echo"<br>jika a = 9 dan b = 4 maka a && b = Data Salah";} // Jika salah satu Tak sama


$f = 4;
$k = 5;
echo "<br>a = 4</br>";
echo "<br>b = 5</br>";
if ($f == 4 || $k == 9)
 
{echo"<br>jika a = 4 dan b = 9 maka a || b = Data Benar</br>";} // Jika salah satu sama atau keduanya sama
 
else
    {echo"<br><h1>Data Salah ";} // Jika tidak ada yang sama
 

$f = 9;
$k = 5;
echo "<br>a = 9</br>";
echo "<br>b = 5</br>";
if ($f == 9 Xor $k == 6)
 
{echo"<br>jika a = 9 dan b = 6 maka a XOR b = Data Benar</br>";} // Jika salah satu sama
 
else
    {echo"<br>Data Salah ";} // Jika tidak ada yang sama atau data keduanya sama
	
$f = 9;
$k = 5;
echo "<br>a = 9</br>";
echo "<br>b = 5</br>";

if ($f == 9 Xor $k == 6)
 
{echo"<br>jika a = 9 dan b = 6 maka a XOR b = Data Benar</br>";} // Jika salah satu sama
 
else
    {echo"<br>Data Salah ";} // Jika tidak ada yang sama atau data keduanya sama	
?>

</body>
</html>