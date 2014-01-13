<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * Bootstrap Smarty view
     */
    protected function _initView()
    {
        // initialize smarty view
        $view = new Ext_View_Smarty($this->getOption('smarty'));
        // setup viewRenderer with suffix and view
        $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
        $viewRenderer->setViewSuffix('tpl');
        $viewRenderer->setView($view);

        // ensure we have layout bootstraped
        $this->bootstrap('layout');
        // set the tpl suffix to layout also
        $layout = Zend_Layout::getMvcInstance();
        $layout->setViewSuffix('tpl');
        
        return $view;
    }
    
    protected function _initRoute(){
        // Получаем маршрут, по-умолчанию
        $router = Zend_Controller_Front::getInstance()->getRouter();
        
        $router->addRoute('weather',
                new Zend_Controller_Router_Route('/weatherinfo',
                        array('controller' => 'weather', 'action' => 'displayweather'))
        );
    }
    
    protected function _initMemcache() {
        $mem = Zend_Cache::factory(
        'Core', 'Memcached', [
                                'lifetime'                => rand(6000, 20000),
                                'automatic_serialization' => true
                             ],
                             [
                                'servers' => [
                                    ['host' => "mymemcache-server1", 'weight' => 1, 'timeout' => 3]
                                ]
                             ]
        );
        
        Zend_Registry::set('MEMCACHE', $mem);
    }
    
}