<?php
session_start();
if (isset($_SESSION['USUARIO'])) {
    header('Location:cafe_lista.php');
    die();
}else{
    header('Location:login-form.php');
    die();
}