<?php
if(isset($_COOKIE["visited"])) {
    $visited = $_COOKIE["visited"] + 1;
} else {
    $visited = 1;
}

setcookie("visited", $visited, time() + (86400 * 30), "/"); 
echo "Вы посетили эту страницу: " . $visited . " раз.";
?>
