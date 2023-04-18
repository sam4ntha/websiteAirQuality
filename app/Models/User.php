<?php

namespace App\Models;

use App\Services\FirebaseService;

class User {
    private $email;
    private $displayName;
    private static $service;

    public function __construct($email, $displayName)
    {
        $this->email       = $email;
        $this->displayName = $displayName;
    }

    public function displayName()
    {
        return $this->displayName;
    }

    public function email()
    {
        return $this->email;
    }

    public static function getUser($email, $password)
    {
        //Obtener usuario que ya existe
        $service = new FirebaseService();
        $result = $service->signIn($email, $password);
        return new User($result->data()['email'], $result->data()['displayName']);
    }

    public static function createUser($email, $password, $displayName)
    {
        //Crear un usuario
        $service = new FirebaseService();
        return $service->addUser($email, $password, $displayName);
        // $result = $service->addUser($email, $password, $displayName);
        // return $result; //Pendiente
        
    }
}