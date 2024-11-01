<?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $min = $_POST["min"];
            $max = $_POST["max"];
            $randomNumber = rand($min, $max);
            echo "Vừa nhấn nút";
            echo "<br>Số ngẫu nhiên: ".$randomNumber;
        }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <form action="" method="post">

        <h1>Ứng dụng tạo số ngẫu nhiên</h1>
        <div class="row">
            <div class="col-9">
                <h1><?=$randomNumber ?></h1>
            </div>
            <div class="col-3">
                <label for="">Số min</label>
                <input type="number" name="min">
                <label for="">Số max</label>
                <input type="number" name="max">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" onclick="generateRandomNumber()">Tạo số ngẫu nhiên</button>
    </form>



</body>

</html>