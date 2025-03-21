<?php
setcookie("guest", "admin", time() + (86400 * 1), "/"); 

if(isset($_COOKIE["guest"])) {
    echo "Куки установлены: " . $_COOKIE["guest"];
} else {
    echo "Куки не установлены";
}
?>