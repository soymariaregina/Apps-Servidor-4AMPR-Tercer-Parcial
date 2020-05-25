<?php

if (empty($_POST)) {
    echo "Error nada que hacer, no se recibieron valores vía POST";
    exit();
} else {
    $opcion = $_POST['opcion']; // name, email
    switch ($opcion) {
        case 'name':
            $username = $_POST['usuario'];
            return User::findByUserName($username);
            break;
        case 'email':
            $email = $_POST['email'];
            return User::findByEmail($email);
            break;
        default:
            return null;
            break;
    }
}