<?php
session_start();

$_SESSION['username'] = 'student';

if (isset($_SESSION['username'])) {
    echo "Username: " . $_SESSION['username'];
} else {
    echo "Переменная сессии username не установлена.";
}
?>
