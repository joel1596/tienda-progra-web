function addToCart($id, $quantity)
{
$response = false;
$connection = Conecta();

$response = $connection->query("insert into cart (id, quantity) values ($id, $quantity)");

return $response;

Desconecta($connection);
}