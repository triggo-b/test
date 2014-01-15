<?php
namespace Weather;
//use Weather\Client;
require_once 'Client.php';

class Weatherd
{
    public function __construct()
    {
        $weather = Client::getWeatherByCity();
        print_r($weather);
    }
    public function getPressure()
    {
        return $this->getPressure();
    }

}

$ww = new Weatherd('Воронеж');
$myCity = $ww->getWeatherByCity('Воронеж');
$myCity->getPressure();