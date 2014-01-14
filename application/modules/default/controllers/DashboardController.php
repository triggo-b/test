<?php
/**
 * Created by PhpStorm.
 * User: savrasov.boris
 * Date: 14.01.14
 * Time: 17:38
 */
class DashboardController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $this->view->Hello = "Вы находитесь в панели управления";
    }

}