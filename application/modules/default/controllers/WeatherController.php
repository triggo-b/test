<?php
use Weather\Weatherd;

class WeatherController extends Zend_Controller_Action
{

    public function indexAction () {}

    public function displayweatherAction ($city = false)
    {
        $city = $_GET['city'];
        $memcache_obj = Zend_Registry::get('MEMCACHE');

        $key = md5(strtolower($city));
        if (! $weatherInfo = $memcache_obj->load($key))

            $weatherInfo = array(
                'ownCity' => $city,
                'pressure' => 'информация недоступна',
                'windSpeed' => 'информация недоступна'
            );

        $memcache_obj->save($weatherInfo, $key, array(), 3600);

        $weatherInfo = (new Weatherd()) -> displayWeather($city);

        $memcache_obj->save($weatherInfo, $key, array(), 3600);

        $json = $this->_helper->json->encodeJson($weatherInfo);
        echo $json;
    }
}
