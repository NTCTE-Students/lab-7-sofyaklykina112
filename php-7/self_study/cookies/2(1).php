<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['username'] = $_POST['username'];
    header('Location: http://localhost:8000/welcome.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма авторизации</title>
</head>
<body>
    <form method="post" action="">
        <label for="username">Имя пользователя:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Войти</button>
    </form>
</body>
</html>