<?php

$serverName = "54.198.136.152";
$dBUsername = "jeremy";
$dBPassword = "Epype2020!";
$dBName = "jeremy_epype";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
