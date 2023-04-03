<?php

//Cart_items structure: cart_id, product_id, quantity
//Carts structure: cart_id, user_id
//require '../models/cart.model.php';
require 'connection.php';
/**
 * It inserts a new row into the cart_items table.
 * 
 * @param cart_id 1
 * @param product_id 1
 * @param quantity 1
 * 
 * @return The result of the query.
 */
function addToCart($cart_id, $product_id, $quantity)
{
    $response = false;
    $connection = Conecta();
    $new_quantity = $quantity + 1;

    if ($connection) {
        $query = "UPDATE cart_items SET quantity='$new_quantity' WHERE cart_id='$cart_id' AND product_id='$product_id'";
        $connection->query($query);
    } else {
        echo "Error: ";
    }

    return $response;

    Desconecta($connection);
}

/**
 * It creates a new cart for a user.
 * 
 * @param user_id The user's id
 * 
 * @return The result of the query.
 */
function createCart($user_id)
{
    $response = false;
    $connection = Conecta();
    //$newCart = new ShoppingCart($user_id);

    $response = $connection->query("insert into carts (user_id) values ($user_id)");

    return $response;

    Desconecta($connection);
}
