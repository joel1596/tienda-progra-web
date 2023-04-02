<link rel="stylesheet" type="text/css" href="components/cardProduct/card.css">

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
        echo  "       <a href='#' class='btn details px-auto' style='background-color: #42465A; color: white;'>view details</a><br />";
        echo  "        <a href='#' class='btn cart px-auto'>ADD TO CART</a>";
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

<!-- <div class='container-fluid'>
    <div class="card mx-auto col-md-3 col-10 mt-5">
        <img class='mx-auto img-thumbnail' src="https://i.imgur.com/pjITBzX.jpg" width="auto" height="auto" />
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <h5 class="card-title font-weight-bold">Yail wrist watch</h5>
                <p class="card-text">$299</p>
                <a href="#" class="btn details px-auto">view details</a><br />
                <a href="#" class="btn cart px-auto">ADD TO CART</a>
            </div>
        </div>
    </div>

</div> -->