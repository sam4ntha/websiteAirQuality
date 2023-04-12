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
}