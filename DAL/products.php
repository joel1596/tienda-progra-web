<?php

require "connection.php";

function getAllProducts()
{

    $response =  false;
    $connection = Conecta();

    $response = $connection->query("select name, description, price from products");

    return $response;

    Desconecta($connection);
}
