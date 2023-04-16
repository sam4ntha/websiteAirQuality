<?php
namespace App\Services;

require './vendor/autoload.php';

use Kreait\Firebase\Factory;

class FirebaseService
{
    private $firebase;
    private $db;

    public function __construct()
    {
        $this->firebase = (new Factory)->withServiceAccount('./key/air-quality-a5242-1e8311802124.json'); //se conecta a firebase usando una cuenta de servicio
        $this->db = $this->firebase->createDatabase(); //Se conecta a la base de datos a traves de firebase
    }

    public function tempPrueba()
    {
        $reference = $this->db->getReference('/prueba/temp');
        $registros = $reference->getValue();
        return $registros;
    }

    public function co2Prueba()
    {
        $reference = $this->db->getReference('/prueba/co2');
        $registros = $reference->getValue();
        return $registros;
    }

    public function humPrueba()
    {
        $reference = $this->db->getReference('/prueba/hum');
        $registros = $reference->getValue();
        return $registros;
    }

    public function medidaAnalogicaPrueba()
    {
        $reference = $this->db->getReference('/prueba/medAna');
        $registros = $reference->getValue();
        return $registros;
    }

    public function voltajePrueba()
    {
        $reference = $this->db->getReference('/prueba/voltaje');
        $registros = $reference->getValue();
        return $registros;
    }

    public function updateLugar($value)
    {
        $updates = [
            'prueba/lugarPrueba/municipio' => $value,//Nodos actualizables
        ];
        $this->db->getReference()->update($updates); //Que nodos se quieren actualizar
    }

    public function updateEstado($value)
    {
        $updates = [
            'prueba/lugarPrueba/estado' => $value,//Nodos actualizables
        ];
        $this->db->getReference()->update($updates); //Que nodos se quieren actualizar
    }

    public function statePrueba()
    {
        /*
       Estado de la prueba, temp hum, co2
       [co2: 300 PPM,
       hum: 28,
       medAna: 156,
       temp: 29,
       voltaje: 1.5,
       ]
       */
        $reference = $this->db->getReference('/prueba');
        $registros = $reference->getValue();
        return $registros;
    }

    public function addUser($email, $password, $displayName)
    {
        $auth = $this->firebase->createAuth();
        $userProperties = [
            'email' => $email,
            'emailVerified' => false, //Si se necesita que se verifique el correo
            'password' => $password,
            'displayName' => $displayName,
        ];
        return $auth->createUser($userProperties);
    }

    public function signIn($email, $password)
    {
        $auth = $this->firebase->createAuth();
        $signInResult = $auth->signInWithEmailAndPassword($email, $password);
        return $signInResult;
    }
}