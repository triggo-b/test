<?php
namespace Weather;
use Weather\Response;
//require_once 'Response.php';

class Weatherd
{

    public function getPressure ($city = false)
    {
        $info = new Response();
        return $info->getWeather($city)->main->pressure;
    }

    public function getWindspeed ($city = false)
    {
        $info = new Response();
        return $info->getWeather($city)->wind->speed;
    }

    public function displayWeather ($city = false)
    {
		$weatherInfo = array(
                                'ownCity'   => $city,
                                'pressure'  => $this->getPressure($city),
                                'windSpeed' => $this->getWindspeed($city)
                        );

        return $weatherInfo;
    }
}
//$r = new Weatherd;
//$info = $r->displayWeather('Воронеж');
//print_r($info);