<?php

require '../../DAL/cart.php';
//require '../../models/cart.model.php';

$user_id = 1;
//$newCart = createCart($user_id);



$product_id = 1;
$quantity = 1;
addToCart(1, 1, 5);

// session_start();

// if (!isset($_SESSION['cart'])) {
//     $_SESSION['cart'] = array();
// }

// $id = $_POST['id'];

// if (!in_array($id, $_SESSION['cart'])) {
//     array_push($_SESSION['cart'], $id);
// }

// echo 'success';
