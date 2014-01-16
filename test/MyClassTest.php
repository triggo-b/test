<?php
namespace Weather\test;
use Weather\Response as myClass;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    public function testZero()
    {
        $my = new myClass('Воронеж');

    }
}