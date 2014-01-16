<?php
namespace Weather;
use Weather\Client;
//require_once 'Client.php';

class Response
{
    public function __construct($weatherList)
    {
        $this->weatherInfo = json_decode($weatherList);
    }

    public function getPressure()
    {
       return $this->weatherInfo->main->pressure;
    }

    public function getCity()
    {
       return $this->weatherInfo->name;
    }

    public function getWindSpeed()
    {
        return $this->weatherInfo->wind->speed . " м/с";
    }

    public function getTemperature()
    {
        return round($this->weatherInfo->main->temp - 273.15, 2) .  " &deg;С";
    }
}








header('Content-Type: text/html; charset=utf-8');
$m = new Client;
$cityWeather = $m->getWeatherByCity('Воронеж');
echo "<hr/>";
echo "Населенный пункт: " . $cityWeather->getCity();
echo "<br/>Температура: " . $cityWeather->getTemperature();
echo "<br/>Атм. давление: " . $cityWeather->getPressure();
echo "<br/>Скорость ветра: " . $cityWeather->getWindSpeed();

