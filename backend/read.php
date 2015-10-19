<?php

$con = new mysqli("localhost", "user", "password", "db");
		if ($con->connect_error)
		{

			die("Connection Failed: " . $con->connect_error);
		}
$sql = "SELECT plats FROM bokningar";
$result = $con->query($sql);
$array = array();

if ($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		//echo $row["plats"];
		//$row["plats"];
		array_push($array, $row["plats"]);
		//echo "<br>";
	}
}
?>


