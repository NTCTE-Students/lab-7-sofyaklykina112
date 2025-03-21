<?php

if (!isset($_COOKIE['loggedin']) || $_COOKIE['loggedin'] !== 'true') {

    header('Location: http://localhost:8000/login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизованная страница</title>
</head>
<body>
    <h1>Добро пожаловать!</h1>
    <p>Вы успешно вошли.</p>
</body>
</html>
