<?php
require_once 'ConnectDatabase.php';
class Book
{
    public $connect;
    public function __construct()
    {
        $this->connect = new ConnectDatabase();
    }
    // Hiển thị -> Lấy ra toàn bộ dữ liệu
    public function getAllBook()
    {
        $sql = "SELECT * FROM `books`";
        $this->connect->setQuery($sql);
        return $this->connect->loadData();
    }
    // Thêm -> Câu insert into
    public function insertBook($id, $title, $cover_image, $author, $publisher, $publish_year)
    {
        $sql = "INSERT INTO `books` VALUES (?,?,?,?,?,?)";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$id, $title, $cover_image, $author, $publisher, $publish_year]);
    }
    // Sửa -> có 2 câu SQL
    //    Lấy thông tin theo id
    public function getIdBook($id)
    {
        $sql = "SELECT * FROM `books` WHERE id = ?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$id], false);
    }
    //    Câu update
    public function updateBook($title, $cover_image, $author, $publisher, $publish_year, $id)
    {
        $sql = "UPDATE `books` SET `title`= ?,`cover_image`= ?,`author`= ?,`publisher`= ?,`publish_year`= ? WHERE `id`= ?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$title, $cover_image, $author, $publisher, $publish_year, $id], false);
    }
    //  Xóa
    public function deleteBook($id)
    {
        $sql = "DELETE FROM `books` WHERE id = ?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$id], false);
    }
}
