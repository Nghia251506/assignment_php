<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>

<body>
    <h1>Thêm lịch diễn</h1>
    <form method="POST" action="assignment/app/views/shows/add">
        <input type="text" name="name" placeholder="Tiêu đề" required>
        <textarea name="description" placeholder="Mô tả"></textarea>
        <input type="date" name="date" required>
        <input type="text" name="location" placeholder="Địa điểm" required>
        <input type="number" step="0.01" name="price" placeholder="Giá tiền" required>
        <input type="text" name="category" placeholder="Hạng mục" required>
        <button type="submit">Lưu lịch diễn</button>
    </form>
</body>

</html>