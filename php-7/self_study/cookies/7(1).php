<?php
setcookie('theme', 'light', time() + 3600);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie('theme', $_POST['theme'], time() + 3600);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Изменение темы</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="theme" value="dark">
        <button type="submit">Переключить на тёмную тему</button>
    </form>
    
    <p>Текущая тема: <?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'Не выбрана'; ?></p>
</body>
</html>
