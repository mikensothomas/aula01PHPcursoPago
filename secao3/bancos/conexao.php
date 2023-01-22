<?php

$hostname = "localhost";
$bancodedados = "teste";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_error) {
    echo "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}