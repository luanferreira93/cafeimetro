<?php
session_start();
if (isset($_SESSION['USUARIO'])) {
    session_destroy();
    header('Location:login-form.php');
    die();
}