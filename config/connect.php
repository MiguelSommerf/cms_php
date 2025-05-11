<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'cms';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("A conexão com o banco de dados falhou: " . mysqli_connect_error());
}