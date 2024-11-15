<!-- Select data from database -->

<?php
require_once './connectDB.php';

// $sql = "SELECT * FROM products";
// // $conn->query($sql);
// // $stat = $conn->prepare($sql);
// // $stat->execute();
// // $product = $stat->fetchAll();
// $stat = $conn->query($sql);
// $product = $stat->fetch();
// $products = $stat->fetchAll();


// echo "<pre>";
// print_r($products);

// =====  Phân trang ========
$limit = 3;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM products";

$stmt = $conn->prepare($sql);

// $stmt->bindParam(':limit', $limit);
// $stmt->bindParam(':offset', $offset);

$stmt->execute();

$products = $stmt->fetchAll();

echo "<pre>";
echo "pages: $page";
echo "offset: $offset";
print_r($products);
