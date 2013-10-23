<!DOCTYPE html> 
<html> 
	<head> 
	  <title>login</title> 
		<style type="text/css">
		<!--
		.border1 {
		border: 2px solid blue;
		margin: auto;
		width: 300px;
		height: 300px;
		margin-top:100px;
		}

		.border2 {
		background: cyan;
		padding: 5px 40px 5px 40px;
		}

		--> 
		</style>
	</head>

	<body>
		<?php 
		session_start();
		if (isset($_SESSION['user'])){
			session_destroy();
		}
		?> 
		<form id="loginForm" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		<div class="border1">
		<div class="border2">
		<h3 align="center">LOGIN </h3>
		<hr/>
		<p><strong>Username</strong><br />
		<input type="text" name="username" size="30"/>
		</p>
		<p><strong>Password</strong><br />
		<input type="password" name="password" size="30"/>
		</p>
		<p>
		<input type="submit" value="Login" onclick="login();"/>
		</p>
		</div>
		</div>
		</form>
		
		<div align = "center">
		<?php 
			$acc_user = 'maghfir';
			$acc_pas = '1234';
			if (isset($_POST['username']) && isset($_POST['password'])) { 
			//$username = $_POST['username']; //diambil dari nama input di form login
			//$password = $_POST['password']; //diambil dari nama input di form login
			$username = strip_tags($_POST['username']);
			$password = strip_tags($_POST['password']);
			if (($username==$acc_user)&&($password==$acc_pas)){
				$_SESSION['user'] = $username;
				echo ' login berhasil, selamat datang <br/>'.
						'<a href="tugasRumah.php">Lanjutkan</a><br/>';
			} else {
				echo ' username atau pasword yang anda masukkan salah<br/>'.
					'<a href="tugasRumah.php">Silahkan Mencoba Lagi</a>';
			}
		}
		?>
	</body>
</html>