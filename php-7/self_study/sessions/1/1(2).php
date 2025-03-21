<?php
setcookie("user", "admin", time() + (86400 * 1), "/"); 

if(isset($_COOKIE["user"])) {
    echo "Куки установлены: " . $_COOKIE["user"];
} else {
    echo "Куки не установлены";
}
?>
