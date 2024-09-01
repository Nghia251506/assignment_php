<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <ul>
        <?php foreach ($product['product'] as $product): ?>
            <li><?= $product['name'] ?> - <?= $product['price'] ?> VND</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
