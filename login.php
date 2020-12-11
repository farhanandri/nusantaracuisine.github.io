<?php
require 'function.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
	if( mysqli_num_rows($result) == 1 ) {
		$row = mysqli_fetch_assoc($result);
		$resultpass = mysqli_query($conn, "SELECT * FROM users WHERE password = '$password'");

		if( mysqli_num_rows($resultpass) == 1 ) {
			header("Location: indexLogin.php");
			exit;
		}
	}

	$error = true;

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="loginStyle.css">
	<title>Nusantara Cuisine</title>	
</head>
<body>
	<header>
        <a href="index.html" class="logo">Nusantara<br>Cuisine<span>.</span></a>
        <ul class="navigation">
			<li><a href="index.html">kembali</a></li>
        </ul>
	</header>

    <menu class="home" id="home">
		<div class="content">
            <h2>Login</h2>
            <br>
            <br>
            <div class="login">
				<form id="loginlogin" method="post">
					<table>
						<tr>
							<td><label for="username">Username : </label></td>
							<td><input type="text" name ="username" required></td>
						</tr>
						<tr>
							<td><label for="password">Password : </label></td>
							<td><input type="password" name ="password" required></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="login" class="btn" value="Masuk">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
    </menu>

    <div class="madeByText">
        <p>Made By <span>C6</span> Team.</p>
	</div>
</body>
</html>