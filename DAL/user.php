<?php

require_once "connection.php";
session_start();

function login($email, $password)
{
    $response = false;
    $connection = Conecta();
    $response = $connection->query("select * from users where email = '$email' and password = '$password'");

    //save user data in session
    if ($response->num_rows > 0) {
        $row = $response->fetch_assoc();
        $_SESSION['user'] = $row;
    }

    return $response;

    Desconecta($connection);
}
