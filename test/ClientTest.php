<?php
namespace Weather\test;
use Weather\Client as Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    public function testPressure()
    {
        $my = new Client;
        $currentCity = $my->getWeatherByCity('Брянск');
        $this->assertEquals(1003, $currentCity->getPressure());
    }

    public function testException()
    {
        $this->setExpectedException('Weather\Exception\myException');
        $my = new Client;
        $my->getWeatherByCity(false);

    }
}