<?php
namespace Weather;
use Weather\Response;
require_once 'Response.php';

class Weatherd extends Response
{
    public function __construct()
    {

    }
    public function getPressure()
    {
        return 12345;
    }
}

$Wcity = new Weatherd;
$myCity = $Wcity->getWeatherByCity('Воронеж');
echo $Wcity->getPressure();