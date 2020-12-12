<!DOCTYPE html>
<html lang="en">
<head>
	 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="asset/css/materialize.min.css"  media="screen,projection"/>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col s12 m12">
				<div class="card" style="margin: 75px 350px 0px 350px;">
					<div class="card-container">
					<h3 class="center">Login</h3>
					<form action="" method="POST">
						<label>E-mail</label>
						<input type="email" name="email">

						<label>Password</label>
						<input type="password" name="password" >

						<button class="btn-small blue accent-3" type="submit" name="login">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
 </div>
	<script type="text/javascript" src="asset/js/materialize.min.js"></script>
</body>
</html>

<?php 
	$email_login = 'admin@gmail.com';
	$pw_login = '123456';
 ?>

<?php 
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (($email === $email_login) AND ($password === $pw_login)) {
		echo "Login berhasil! <br>";
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['pw'] = $password;
		header('Location:siswa.php');
		// $pw_md5 = md5($pw_login);
		// echo $pw_md5. '<br>';

	} else {
		echo "Gagal Login!";
	}	
}

 ?>