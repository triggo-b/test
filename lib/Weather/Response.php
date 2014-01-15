<?php
namespace Weather;

class Response
{
    const URL = 'http://api.openweathermap.org/data/2.5/weather?q=';

    public function getWeather ($city = false)
    {
        $url = self::URL . $city . ',ru';
        $data = file_get_contents($url);
        $myArr = json_decode($data);
        return $myArr;
    }
}