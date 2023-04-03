<link rel="stylesheet" type="text/css" href="components/cardProduct/card.css">
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<?php
include 'DAL/products.php';
$products = getAllProducts();

echo "<div class='container-fluid'>";

if ($products->num_rows > 0) {
    echo "<div class='row'>";
    while ($row = $products->fetch_assoc()) {


        echo "<div class='col-md-4'>";

        echo  "  <div class='card mx-auto col-md-3 col-10 mt-5'>";
        echo  "  <img class='mx-auto img-thumbnail' src='https://images.teemill.com/k5rc7zgxhkkhb5uzf0xipuy2kkks5oksoqmmpafcxfgpod8z.png.webp?w=1080&v=2' width='250px' height='auto' />";
        echo  "  <div class='card-body text-center mx-auto'>";
        echo  "      <div class='cvp'>";
        echo  "          <h5 class='card-title font-weight-bold'>{$row['name']}</h5>";
        echo  "      <p class='card-text'>$  {$row['price']}</p>";
        echo  "       <button class='btn details px-auto' style='background-color: #42465A; color: white;'>view details</button><br />";
        echo  "        <button class='add-to-cart' data-id='1'>ADD TO CART</button>";
        echo  "     </div>";
        echo  "  </div>";
        echo "  </div>";
        echo "</div>";
    }
} else {
    echo "<h1>NO HAY PRODUCTOS</h1>";
}
echo "</div>";
echo "</div>";



?>

<script src="components/cardProduct/card.js"></script>