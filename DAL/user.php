<?php

require "connection.php";

function login($email, $password)
{
    $response = false;
    $connection = Conecta();

    $response = $connection->query("select * from users where email = '$email' and password = '$password'");

    return $response;

    Desconecta($connection);
}
