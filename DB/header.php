<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin'])){
    echo "<script> window.location.href='../index.php'; </script>";

}
