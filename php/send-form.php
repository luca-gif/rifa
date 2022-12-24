<?php
require_once '../db-conn.php';

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userNumber = $_POST['number'];

$sql = "INSERT INTO users(name, email, number) VALUES('$userName', '$userEmail', '$userNumber')";
$insert = $conn->query($sql);

header("location: ../index.php");

$conn->close();