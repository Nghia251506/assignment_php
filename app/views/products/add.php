<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <h1>Thêm sản phẩm mới</h1>
    <form method="POST" action="/">
        <input type="text" name="name" placeholder="Tên sản phẩm" required>
        <textarea name="description" placeholder="Mô tả"></textarea>
        <input type="number" name="price" placeholder="Giá" required>
        <input type="text" name="image_url" placeholder="URL hình ảnh">
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
