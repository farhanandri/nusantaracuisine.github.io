<?php 
require 'function.php';
$admin = query("SELECT * FROM admin");
$users = query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
	<title>NC Admin</title>
	<link rel="stylesheet" type="text/css" href="adminStyle.css">
</head>
<body>

	<header>
        <a href="index.html" class="logo">Nusantara<br>Cuisine<span>.</span></a>
        <ul class="navigation">
			<li><a href="index.html">kembali</a></li>
        </ul>
	</header>

	<div class="container">
		<br><br><br><br><br><br><br><br><br><br>
		<center><h1>Tabel Admin</h1></center>
		<table border="1" cellpadding="10" cellspacing="0">

			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Password</th>
			</tr>

			<?php $i = 1; ?>
			<?php foreach( $admin as $row ) :?>

			<tr>
				<td><?= $i; ?></td>
				<td><?= $row["username"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["password"]; ?></td>
			</tr>

			<?php $i++;	?>
			<?php endforeach; ?>
				
		</table>

		<center><h1>Tabel User</h1></center>
		<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach( $users as $row ) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["username"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["password"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
		
		</table>
	</div>

</body>
</html>