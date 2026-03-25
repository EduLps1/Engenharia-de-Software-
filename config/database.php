<?php

$host = "localhost";
$user = "root";
$pass = "159786324Edu.";
$db = "restaurante";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
