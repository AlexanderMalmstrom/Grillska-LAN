<?php
	$user = $_POST['user'];
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$grillska = $_POST['grillska'];
	$age = $_POST['age'];
	$vuxenNamn = $_POST['vuxenNamn'];
	$vuxenNummer = $_POST['vuxenNummer'];
	$plats = $_POST['plats'];

	$con = new mysqli("localhost", "user", "password", "db");
		if ($con->connect_error)
		{

			die("Connection Failed: " . $con->connect_error);
		}
	$sql = "INSERT INTO bokningar (user, name, mail, grillska, age, vuxenNamn, vuxenNummer, plats) VALUES('$user', '$name', '$mail', '$grillska', '$age', '$vuxenNamn', '$vuxenNummer', '$plats')";

			if ($con->query($sql) === TRUE)
			{
				header("Location: https://alexandermalmstrom.se/gg");;
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	$con->close();
?>