<?php

session_start(); //* Inicia o continua la session
if (!isset($_SESSION['u'])) {
    header('Location: login.php'); //* Redirigir al login
    exit;
}