<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname ="ysmdb";

//Creat connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("접속에 실패했습니다. " . $conn->connect_error);
}
?>