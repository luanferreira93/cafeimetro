<?php
session_start();

if(!isset($_SESSION['USUARIO'])){
    $usuario = [];
    $usuario['EMAIL'] = null;

    $_SESSION['USUARIO'] = $usuario;
}