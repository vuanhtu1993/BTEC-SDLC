<?php
class ProductController
{
    // Hiển thị -> Giao diện
    public function listProduct()
    {
        $mProduct = new Product();
        $listProduct = $mProduct->getAllProduct();

        include_once 'views/list.php';
    }
    // Thêm -> Giao diện
    public function addProduct()
    {
        if (isset($_POST['btn_submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $desc = $_POST['desc'];
            $quantity = $_POST['quantity'];
            $mProduct = new Product();
            $addProduct = $mProduct->insertProduct($name, $price, $desc, $quantity);
            if (!$addProduct) {
                header('Location: index.php');
            }
        }
        include_once 'views/add.php';
    }
    // // Sửa -> Giao diện
    // public function editBook()
    // {
    //     //Bước 1: Lấy thông tin ngdung đã nhập trước đó
    //     if (isset($_GET['id'])) {
    //         //            echo $_GET['id'];
    //         $mBook = new Book();
    //         $idBook = $mBook->getIdBook($_GET['id']);
    //         //Bước 2: Thực hiện chỉnh sửa
    //         if (isset($_POST['btn_submit'])) {
    //             $title = $_POST['title'];
    //             $author = $_POST['author'];
    //             $publisher = $_POST['publisher'];
    //             $publish_year = $_POST['publish_year'];
    //             // Cách 1: Không thêm ảnh
    //             //            $cover_image = null;
    //             //            echo $title;
    //             //            echo $author;
    //             //            echo $publisher;
    //             //            echo $publish_year;
    //             //     Khởi tạo đối tượng sách (Sau khi khởi tạo gọi đến PT thêm sách)
    //             //            $editBook = $mBook->updateBook($title, $cover_image, $author, $publisher, $publish_year, $_GET['id']);
    //             // Tự động chuyển về trang danh sách sau khi thêm xong
    //             //            if(!$editBook){
    //             //                header('Location: index.php');
    //             //            }
    //             // Cách 2: Có upload file
    //             //            var_dump($_FILES['cover_image']['name']);
    //             //            var_dump($_FILES['cover_image']['tmp_name']);
    //             if ($_FILES['cover_image']['name'] != null) {
    //                 // Có upload ảnh thì thay ảnh mới
    //                 $target_dir = "images/";
    //                 $name_img = time() . $_FILES['cover_image']['name'];
    //                 $cover_image = $target_dir . $name_img;
    //                 move_uploaded_file($_FILES['cover_image']['tmp_name'], $cover_image);
    //             } else {
    //                 // Không upload ảnh thì giữ lại ảnh cũ
    //                 $cover_image = $idBook->cover_image;
    //             }
    //             $addBook = $mBook->updateBook($title, $cover_image, $author, $publisher, $publish_year, $_GET['id']);
    //             // Tự động chuyển về trang danh sách sau khi thêm xong
    //             if (!$addBook) {
    //                 header('Location: index.php');
    //             }
    //         }
    //     }
    //     include_once 'views/edit.php';
    // }
    // // Xóa
    // public function deleteBook()
    // {
    //     if (isset($_GET['id'])) {
    //         $mBook = new Book();
    //         $deleBook = $mBook->deleteBook($_GET['id']);
    //         if (!$deleBook) {
    //             header('Location: index.php');
    //         }
    //     }
    //     echo "đây là xóa";
    // }
}