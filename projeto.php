<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<?php
$con = new PDO("mysql:host=localhost;dbname=exercicio", "root", "senha");