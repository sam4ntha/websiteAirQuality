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

    public static function createUser($email, $password)
    {
        $service = new FirebaseService();
        $result = $service->signIn($email, $password);
        return new User($result->data()['email'], $result->data()['displayName']);
    }

    public static function addUser($email, $password, $displayName)
    {
        $service = new FirebaseService();
        $result = $service->addUser($email, $password, $displayName);
        return $result; //Pendiente
    }
}