<?php
/**
 * Created by PhpStorm.
 * User: savrasov.boris
 * Date: 13.01.14
 * Time: 16:37
 */
class UserController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $this->view->userHello = "Добро пожаловать в usersController";
        $this->view->headScript()->appendFile('http://test/js/test.js');
    }

}