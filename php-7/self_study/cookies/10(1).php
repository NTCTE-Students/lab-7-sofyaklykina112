<?php

setcookie('session_id', '', time() - 3600, '/');


if (!isset($_COOKIE['session_id'])) {
    echo '<h1>Куки session_id успешно удалена.</h1>';
} else {
    echo '<h1>Не удалось удалить куки session_id.</h1>';
}
?>