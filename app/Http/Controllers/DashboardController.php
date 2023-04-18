<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IoT;

class DashboardController extends Controller
{
    private $iot;
    public function __construct()
    {
        $this->iot = new IoT();
    }

    
    public function dashboard()
    {
        //
        $co2 = $this->iot->getCo2('test');
        $hum = $this->iot->getHum('test');
        $medAna = $this->iot->getMedAna('test');
        $temp = $this->iot->getTemp('test');
        $velocidad = $this->iot->getVelocidad('test');
    }
}
