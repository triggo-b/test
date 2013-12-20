<?php
namespace project\test;
use project\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testZero()
    {
        $this->setExpectedException('project\Exception\ExceptionClass');
        $my = new Calculator;
        $my->getCommission(0);
    }
    public function testMinus()
    {
        $this->setExpectedException('project\Exception\ExceptionClass');
        $my = new Calculator;
        $my->getCommission(-1);
    }
    /**
     * @dataProvider cList
     */
    public function testCommiss($cost, $commiss)
    {
        $my = new Calculator;
        $cms = $my->getCommission($cost);
        $this->assertEquals($commiss, $cms);
    }
    
    public function cList()
    {
        return array(
                array(2, 10),
                array(35, 10),
                array(147, 14.7),
                array(1432, 143.2),
                array(2940, 150),
        );
    }
    
}