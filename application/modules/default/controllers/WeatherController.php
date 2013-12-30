<?php
use Weather\Weatherd; 

class WeatherController extends Zend_Controller_Action
{
    public function indexAction()
    {
//         echo 'welcome to weatherController';
    }
    
    public function displayweatherAction ($city = false)
    {
        $city = $_GET['city'];
        $memcache_obj = Zend_Registry::get('MEMCACHE');
        
        $key = md5(strtolower($city));
        $results = $memcache_obj->load($key);
        
        if($results) {
            $weatherInfo = $results;
        } else {
            $weatherInfo = array(
                                'ownCity'   => $city,
                                'pressure'  => 'информация недоступна',
                                'windSpeed' => 'информация недоступна'
                        );
            
            $memcache_obj->save($weatherInfo, $key, array(), 3600);
            
//             $weatherInfo = (new Weather())->displayWeather($city);

            $w = new Weatherd;
            $weatherInfo = $w->displayWeather($city);
            
            $memcache_obj->save($weatherInfo, $key, array(), 3600);
			
        }
		
        
        
//         $this->view->ownCity   = $weatherInfo['ownCity'];
//         $this->view->pressure  = $weatherInfo['pressure'];
//         $this->view->windSpeed = $weatherInfo['windSpeed'];

        return json_encode($weatherInfo);
        
    }
}