<?php
/**
 * Archivo de la clase User
 * 
 * Este archivo contiene la definción de la clase User
 * sus métodos y propiedades para controlar las acciones
 * de usuarios dentro de la aplicación.
 */

 class User {
     public $id;
     public $firstname;
     public $lastname;
     public $email;
     public $name;
     public $password;

     public static function findByUserName($username) {
        $cnn = new PDO("mysql:dbname=4ampr;host=127.0.0.1;", "myuser", "123");
        $smt = $cnn->prepare("select * from users where name=?");
        if ($smt->execute($username)) {
            if ($smt->rowCount() == 1) {
                return true;
            } else {
                return false;
            }
        } else {
            echo "Error al ejecutar la consulta";
            exit();
        }
     }

     public static function findByEmail($email) {
        $cnn = new PDO("mysql:dbname=4ampr;host=127.0.0.1;", "myuser", "123");
        $smt = $cnn->prepare("select * from users where email=?");
        if ($smt->execute($email)) {
            if ($smt->rowCount() == 1) {
                return true;
            } else {
                return false;
            }
        } else {
            echo "Error al ejecutar la consulta";
            exit();
        }
     }


 }