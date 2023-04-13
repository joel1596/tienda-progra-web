<?php

function createItem($cart_id, $product_id, $quantity, $connection)
{
    $response = false;
    $query = "INSERT INTO cart_items (cart_id, product_id, quantity) VALUES ('$cart_id', '$product_id', '$quantity')";
    $response = $connection->query($query);
    if ($connection->affected_rows > 0) {
        return $response;
    } else {
        echo $connection->error;
        return false;
    }
}

function updateItem($cart_id, $product_id, $quantity, $connection)
{
    $response = false;
    $query = "UPDATE cart_items SET quantity='$quantity' WHERE cart_id='$cart_id' AND product_id='$product_id'";
    $response = $connection->query($query);
    if ($connection->affected_rows > 0) {
        return $response;
    } else {
        echo $connection->error;
        return false;
    }
}
