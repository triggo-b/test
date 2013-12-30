<?php
class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $this->view->hello = 'Стартовая страница';
        
        $this->view->homeLink = '<a href="/weather">home</a>';
    }
}