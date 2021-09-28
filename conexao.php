<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'escola';

    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . " ) " . $mysqli->connect_error;
    }
?>
