<?php
session_start();


if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = date('Y-m-d H:i:s');
}


$_SESSION['last_visit_time'] = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Время посещений</title>
</head>
<body>
    <h1>Информация о посещениях</h1>
    <p>Первый визит: <?= htmlspecialchars($_SESSION['first_visit_time']) ?></p>
    <p>Последний визит: <?= htmlspecialchars($_SESSION['last_visit_time']) ?></p>
</body>
</html>