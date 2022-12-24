<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once 'db-conn.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
//header("Content-Type: application/json");


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    $arr[] = array('data' => $row['number']);
  }
  echo json_encode($arr);
}

$conn->close();