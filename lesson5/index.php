<?php


require_once "product.php";
require_once "cartItem.php";
require_once "cart.php";

$product1 = new Product("product1", "sp01", 10000, "product1");
$product2 = new Product("product2", "sp02", 20000, "product2");
$product2 = new Product("product2", "sp02", 20000, "product2");

$cart = new Cart();

$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product2);

// echo "<pre>";
// var_dump($cart);
// die;

// $cart->displayCart();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Sản phẩm</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$product1->getName() ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?=$product1->getPrice()?></h6>
            <p class="card-text"><?=$product1->getDescription() ?></p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$product2->getName() ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?=$product2->getPrice()?></h6>
            <p class="card-text"><?=$product2->getDescription() ?></p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
    <h1>Giỏ hàng</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cart->getItems() as $item){
                $product = $item->getProduct();
             ?>
            <tr>
                <td><?=$product->getId() ?></td>
                <td><?=$product->getName() ?></td>
                <td><?=$product->getPrice() ?></td>
                <td><?=$item->getQuantity() ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>