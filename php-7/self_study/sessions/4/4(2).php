<?php
session_start();


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


if (isset($_POST['add'])) {
    $product = $_POST['product'];
    $_SESSION['cart'][] = $product;
}


if (isset($_POST['remove'])) {
    $product = $_POST['product'];
    if (($key = array_search($product, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
    }
}


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
</head>
<body>
    <h1>Корзина</h1>
    <form method="post">
        <label for="prod// Удаление товара из корзиныuct">Добавить товар:</label>
        <input type="text" name="product" required>
        <button type="submit" name="add">Добавить</button>
    </form>
    
    <ul>
        <?php foreach ($_SESSION['cart'] as $item): ?>
            <li>
                <?= htmlspecialchars($item) ?>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="product" value="<?= htmlspecialchars($item) ?>">
                    <button type="submit" name="remove">Удалить</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>