<?php
setcookie('font_size', '16px', time() + 3600);
setcookie('layout', 'wide', time() + 3600); 
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Все куки</title>
</head>
<body>
    <h1>Все установленные куки:</h1>
    <?php
    if(count($_COOKIE) > 0) {
        foreach($_COOKIE as $name => $value) {
            echo "<strong>$name:</strong> $value<br>";
        }
    } else {
        echo "Нет установленных куки.";
    }
    ?>
</body>
</html>
