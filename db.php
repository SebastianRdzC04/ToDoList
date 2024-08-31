<?php
$host = "localhost";
$db = "todolist";
$user = "root";
$pass = "";

// Crean la conexion con la base de datos
$conn = new mysqli($host, $user, $pass, $db);

// Verifican la conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
