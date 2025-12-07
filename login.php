<?php
header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"), true);

$username = $data["username"];
$password = $data["password"];

$conn = new mysqli("localhost", "root", "", "Match_Up");

$stmt = $conn->prepare("SELECT userpw FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

$stmt->bind_result($db_password);
$stmt->fetch();

$stmt->close();
$conn->close();

?>