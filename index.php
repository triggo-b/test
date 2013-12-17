<?php

class Weather
{

    public function getWeather ($city = false)
    {
        $url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . ',ru';
        $data = file_get_contents($url);
        $myArr = json_decode($data);
        return $myArr;
    }

    function getPressure ($city = false)
    {
        $info = self::getWeather($city);
        return $info->main->pressure;
    }

    function getWindspeed ($city = false)
    {
        $info = self::getWeather($city);
        return $info->wind->speed;
    }

    function displayWeather ($city = false)
    {
        $info = 'Давление: ' . $this->getPressure($city) . '<br/>';
        $info .= 'Скорость ветра: ' . $this->getWindspeed($city);
        return $info;
    }
}
$wt = new Weather();
echo $wt->displayWeather('moscow');

?>
