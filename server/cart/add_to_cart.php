<?php

require '../../DAL/cart.php';
$id = $_POST['id'];
$id = intval($id);

$product_id = 1;
$addNQuantity = 5;
if (addToCart($id, 1, 5)) {
    echo 'success';
} else {
    echo 'fail';
}
