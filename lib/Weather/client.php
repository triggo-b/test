<?php
namespace Weather;

class Client
{
    const URL = 'http://api.openweathermap.org/data/2.5/weather?q=';

    public function getWeatherByCity ($city)
    {
        $url = self::URL . $city . ',ru';
        $data = file_get_contents($url);

//        $myArr = json_decode($data);
//        print_r($myArr);
//        return $myArr;

        return new Client($data);
    }
}