<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco_de_sangue";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>