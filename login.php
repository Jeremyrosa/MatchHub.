<?php
header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"), true);

$username = $data["username"];
$password = $data["password"];

$conn = new mysqli("localhost", "root", "", "Match_Up");
?>