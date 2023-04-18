<?php
namespace App\Services;

require './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

class FirebaseService
{
    private $firebase;
    private $db;

    public function __construct()
    {
        $this->firebase = (new Factory)->withServiceAccount('./key/fotosfirebase-49f24-b99f190d869f.json'); //se conecta a firebase usando una cuenta de servicio
        $this->db = $this->firebase->createDatabase(); //Se conecta a la base de datos a traves de firebase
    }

    public function tempPrueba()
    {
        $reference = $this->db->getReference('/Test/test/Temperatura');
        $registros = $reference->getValue();
        return $registros;
    }

    public function co2Prueba()
    {
        $reference = $this->db->getReference('/Test/test/C02');
        $registros = $reference->getValue();
        return $registros;
    }

    public function humPrueba()
    {
        $reference = $this->db->getReference('/Test/test/Humedad');
        $registros = $reference->getValue();
        return $registros;
    }

    public function medidaAnalogicaPrueba()
    {
        $reference = $this->db->getReference('/Test/test/Medida Analógica');
        $registros = $reference->getValue();
        return $registros;
    }

    public function velocidadPrueba()
    {
        $reference = $this->db->getReference('/Test/test/Velocidad');
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
        $reference = $this->db->getReference('/test');
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