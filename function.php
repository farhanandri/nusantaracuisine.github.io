<?php 
$conn = mysqli_connect("localhost", "root", "", "nusantara_cuisine");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;

	$username = htmlspecialchars($data["username"]);
	$email = htmlspecialchars($data["email"]);
	$password = htmlspecialchars($data["password"]);

	$query = "INSERT INTO admin
				VALUES
			('', '$username', '$email', '$password')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambah2($data) {
	global $conn;

	$username = htmlspecialchars($data["username"]);
	$email = htmlspecialchars($data["email"]);
	$password = htmlspecialchars($data["password"]);

	$query = "INSERT INTO users
				VALUES
			('', '$username', '$email', '$password')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}