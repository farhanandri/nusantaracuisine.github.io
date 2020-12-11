<?php
require 'function.php';

if( isset($_POST["register"]) ) {
	
	if( tambah2($_POST) > 0 ) {
		echo "
			<script>
				alert('Berhasil');
				document.location.href = 'index.html';
			</script>";
	} else {
		echo "
			<script>
				alert('Gagal');
				document.location.href = 'register.php';
			</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="regisStyle.css">
	<title>Nusantara Cuisine</title>
</head>
<body>
	<header>
        <a href="index.html" class="logo">Nusantara<br>Cuisine<span>.</span></a>
        <ul class="navigation">
        	<li><a href="listResep.html">kembali</a></li>
        </ul>
	</header>

    <menu class="home" id="home">
        <div class="content">
            <h2>Registrasi</h2>
            <br>
            <br>
            <div class="registration">
				<form id="regisregis" method="post">
					<table>
						<tr>
							<td><label for="username">Username : </label></td>
							<td><input type="text" name="username" id ="username" required></td>
						</tr>
						<tr>
							<td><label for="email">Email : </label></td>
							<td><input type="email" name="email" id ="email" required></td>
						</tr>
						<tr>
							<td><label for="password">Password : </label></td>
							<td><input type="password" name="password" id ="password" required=""></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="register" class="btn" value="Daftar"></td>
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