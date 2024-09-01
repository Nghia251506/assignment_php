<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <h1>Danh sách lịch diễn</h1>
    <ul>
    <?php foreach ($shows['shows'] as $show): ?>
        <li>
            <strong>Title:</strong> <?= $show['title'] ?><br>
            <strong>Description:</strong> <?= $show['description'] ?><br>
            <strong>Date:</strong> <?= $show['date'] ?><br>
            <strong>Location:</strong> <?= $show['location'] ?><br>
            <strong>Price:</strong> <?= number_format($show['price']) ?> VND<br>
            <strong>Category:</strong> <?= $show['category'] ?><br>
            <strong>Created By:</strong> <?= $show['created_by'] ?><br>
            <strong>Created At:</strong> <?= $show['created_at'] ?>
        </li>
        <hr>
    <?php endforeach; ?>
    </ul>
</body>
</html>
