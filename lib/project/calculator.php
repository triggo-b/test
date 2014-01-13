<?php
namespace project;

class Calculator
{

    const PROCENT = 0.1;

    const MIN_COMMISS = 10;

    const MAX_COMMISS = 150;

    public function getCommission($cost)
    {
        $cost = floatval($cost);
        
        if ($cost <= 0) {
            throw new Exception\ExceptionClass('minusValue');
        }
        $comm = $cost * self::PROCENT;
        if ($comm < 10) {
            return self::MIN_COMMISS;
        }
        if ($comm > 150) {
            return self::MAX_COMMISS;
        }
        
        return floatval($comm);
    }

    public function getOverall($cost)
    {
        $overall = $cost + $this->getCommission($cost);
        return $overall;
    }
}