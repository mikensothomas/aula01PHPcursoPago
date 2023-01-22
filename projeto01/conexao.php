<?php

$host = "localhost";
$db = "crud_cliente";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    echo ("Falha ao conectar ao banco de dados");
}