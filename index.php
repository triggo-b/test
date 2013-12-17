<?php

class Weather
{

    function getWeather ($city = false)
    {
        $url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . ',ru';
        $data = file_get_contents($url);
        // print_r(json_decode($data));
        $myArr = json_decode($data);
        $err = $myArr->{'cod'};
        if ($err == '404') {
            return "данные отсутствуют";
        } else {
            $weather = 'Город (страна): ' . $myArr->{'name'} . ' (' . $myArr->sys->{'country'} . ')<br/>';
            $weather .= 'Давление: ' . $myArr->main->{'pressure'} . '<br/>';
            $weather .= 'Скорость ветра: ' . $myArr->wind->{'speed'};
            return $weather;
        }
    }

    function displayWeather ($city = false)
    {
        return $this->getWeather($city);
    }
}
$wt = new Weather();
echo $wt->displayWeather('moscow');

?>
