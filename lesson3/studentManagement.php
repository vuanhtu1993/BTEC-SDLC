<?php

$students = [
    'BH00873' => [
        'name' => 'Son',
        'age' => 20,
        'address' => 'HaNoi'
    ],
    'BH00869' => [
        'name' => "Ly",
        'age' => 20,
        'address' => "VinhPhuc",
    ]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'add') {
        print_r($_POST['name']);
        print_r($_POST['age']);
        print_r($_POST['address']);
        if (!isset($students[$_POST['code']])) {
            $students[$_POST['code']] = [
                'name' => $_POST['name'],
                'age' => $_POST['age'],
                'address' => $_POST['address'],
            ];
        } else {
            echo "Mã sinh viên đã tồn tại";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Danh sách sinh viên</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">Tuổi</th>
                <th scope="col">Quê quán</th>
                <th scope="col">Thao tác</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($students as $key => $student) {

            ?>
                <tr>
                    <th scope="row"><?= $key ?></th>
                    <td><?= $student["name"] ?></td>
                    <td><?= $student["age"] ?></td>
                    <td><?= $student["address"] ?></td>
                    <td>
                        <form action="" method="">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="studentCode" value="<?= $key ?>">
                            <button type="submit" class="btn btn-primary">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="container row">
        <div class="col-6">
            <h1>Thêm sản phẩm</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Mã sinh viên</label>
                    <input type="text" class="form-control" name="code" aria-describedby="emailHelp"
                        placeholder="Mã sinh viên">
                </div>
                <div class="form-group">
                    <label for="name">Tên</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                        placeholder="Tên sinh viên">
                </div>
                <div class="form-group">
                    <label for="age">Tuổi</label>
                    <input type="text" class="form-control" name="age" placeholder="Tuổi sinh viên">
                </div>
                <div class="form-group">
                    <label for="age">Quê quán</label>
                    <input type="text" class="form-control" name="address" placeholder="Quê quán">
                </div>
                <input type="hidden" name="action" value="add">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>

</body>

</html>