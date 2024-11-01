<?php
// Lấy dữ liệu từ CSDL
echo "Xin chào cả lớp";
$greeting = "SE06301";
// Variables
# - Tên biến: coding convention
# - Scope (Phạm vi của biến)
$var = "Cú pháp viết tắt";
// Camelcase
$myDrinkSize = "L";

function test() {
    global $myDrinkSize;
    echo $myDrinkSize;
}
// Hằng số (define)
define("PI", 3.14);
$r = 10;
$s = PI * pow($r, 2);
// ======= Data type ======
// 1. String
// 2. Integer
// 3. Float/double
// 4. Boolean
// 5. Null
// 6. Array
// 7. Object
// ======= Data type conversion ======
$var = "100" + 15.0;

// ====== Toán tử ======
// 1. Gán
// 2. Toán tử số học
// 3. Toán tử so sánh
// 4. Toán Logic
// 5. Toán tử 3 ngôi
// 6. Toán tử nối chuỗi
$var1 = "Hello world";
$var2 = $var1 ."SE06301";
echo $var2;
var_dump($var2);

// ====== Tham chiếu: ======
$a = 10;
$b = 20;
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

swap($a, $b);
echo("a: $a, b: $b");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Xin chào cả lớp</h1>
    <?php echo "SE06301" ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum deserunt eius quasi beatae esse consectetur
        reiciendis enim! Nulla laborum ut suscipit veritatis ipsam adipisci, quos pariatur iusto magni deserunt
        corrupti.</p>
    <?php echo "ABC" ?>
    <?=$var?>
    <?php test() ?>

    <?php printf("Diện tích hình tròn: %.1f", $s) ?>

</body>

</html>