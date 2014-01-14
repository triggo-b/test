<?php
/**
 * Created by PhpStorm.
 * User: savrasov.boris
 * Date: 14.01.14
 * Time: 15:53
 */
class LoginController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $this->view->Hello = "Добро пожаловать в loginController";
        $this->view->headScript()->appendFile('http://test/js/test.js');
    }

    public function authAction($user) {
        $user   = $_POST['login'];
        echo $user;
    }

}