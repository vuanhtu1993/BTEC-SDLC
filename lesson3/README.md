## Đề bài: Quản lý thông tin sản phẩm

**Yêu cầu:**

Hãy xây dựng một chương trình PHP để quản lý thông tin các sản phẩm trong một cửa hàng. Chương trình sẽ sử dụng mảng để lưu trữ thông tin sản phẩm bao gồm:

- **Mã sản phẩm** (mảng index)
- **Tên sản phẩm** (mảng associative)
- **Giá** (mảng associative)
- **Số lượng tồn kho** (mảng associative)

```jsx

$sanpham = [
    "sp1" => [
        'name' => 'Áo thun',
        'price' => 100000,
        'amount' => 50
    ],
    "sp2" => [
        // ...
    ]
];

function print() {
}

function addProduct($name, $price, $amount) {
}

function updateProduct($id, &$product) {

}

function deleteProduct($id) {

}

function search($q) {

}

function sort($condition = "price") {

}

```

**Các chức năng cần thực hiện:**

1. **Thêm sản phẩm:**
    - Nhập thông tin sản phẩm mới (mã, tên, giá, số lượng) và thêm vào mảng.
    - Kiểm tra mã sản phẩm đã tồn tại chưa.
2. **Hiển thị danh sách sản phẩm:**
    - In ra toàn bộ thông tin các sản phẩm theo định dạng bảng.
3. **Tìm kiếm sản phẩm:**
    - Cho phép người dùng nhập mã sản phẩm hoặc tên sản phẩm để tìm kiếm.
    - Hiển thị thông tin của sản phẩm tìm được.
4. **Sửa thông tin sản phẩm:**
    - Cho phép người dùng chọn sản phẩm cần sửa và cập nhật thông tin mới.
5. **Xóa sản phẩm:**
    - Cho phép người dùng chọn sản phẩm cần xóa và xóa khỏi danh sách.
6. **Sắp xếp danh sách sản phẩm:**
    - Sắp xếp danh sách sản phẩm theo thứ tự tăng dần của giá.