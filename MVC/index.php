<?php
//require_once 'models/ConnectDatabase.php';
//$conn = new ConnectDatabase();
// require_once 'models/Book.php';
// require_once 'controllers/BookController.php';
// $cBook = new BookController();
require_once 'models/Product.php';
require_once 'controllers/ProductController.php';
$productController = new ProductController();
// $act = isset($_GET['act']) ? $_GET['act'] : "/";
$act = isset($_GET['act']) ?? "/";
//echo $act;
switch ($act) {
    case "add":
        $productController->addProduct();
        break;
        // case "editBook":
        //     $cBook->editBook();
        //     break;
        // case "deleteBook":
        //     $cBook->deleteBook();
        //     break;
    default:
        $productController->listProduct();
        break;
}