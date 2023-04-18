<?php

namespace App\Models;

use App\Services\FirebaseService;

class IoT {
    private $co2;

    private $humedad;
    private $temperatura;

    private $medidaAnalogica;

    private $voltaje;

    private $service;

    public function __construct()
    {
        $this->service = new FirebaseService();
    }

    public function getTemp($test)
    {
        $temperaturaAcumulada = 0;
        $contadorDia = 0;
        $value =$this->service->tempPrueba();
        echo $value;
        // {
        //     $temperaturaAcumulada = $temperaturaAcumulada + $value['temp'];
        //     $contadorDia++;
        // }        
                                    //Si se quiere saber las temperaturas en alguna fecha en paticular->Regla de negocio
                                    //Por si hay más de 2 valores, corchetes marcando arreglo
                                    //Para agregar fecha namespace: use \DateTime; ->espacio global
                                    //$formato = 'Y-m-d H:i:s';
                                    // $temperaturaAcumulada = 0;
                                    // $contadorDia = 0;
                                    //$fecha = DateTime::createFromFormat($formato, '2009-02-15 15:16:17')
                                    //$values->=$this->service->tempPrueba();
                                    //foreach ($values as $valor)
                                    //{
                                        //echo $valor['fecha'];
                                    //}
                                    //$formato = 'Y-m-d H:i:s';
                                    //$fecha = DateTime::createFromFormat($formato, $valor['fecha']);
                                    //if($fecha->format('Y-m-d') == $date){
                                    //     echo 'Las fechas coinciden.\n'
                                    // {
                                    //     $temperaturaAcumulada = $temperaturaAcumulada + $valor['valor'];
                                    //     $contadorDia++;
                                    // }
                                    // return $temperaturaAcumulada/$contadorDia;
                                    //  } ->se obtiene de los argumentos de la funcion public function getTemp(//$date)
                                    // // //}
        // return $temperaturaAcumulada/$contadorDia;
    }

    public function getHum($test)
    {
        $value =$this->service->humPrueba();
        echo $value;
    }

    public function getMedAna($test)
    {
        $value =$this->service->medidaAnalogicaPrueba();
        echo $value;
    }

    public function getVelocidad($test)
    {
        $value =$this->service->velocidadPrueba();
        echo $value;
    }

    public function getCo2($test)
    {
        $value =$this->service->co2Prueba();  
        echo $value;
    }
}