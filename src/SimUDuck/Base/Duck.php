<?php

namespace App\SimUDuck\Base;

use App\SimUDuck\Interfaces\FlyBehavior;
use App\SimUDuck\Interfaces\QuackBehavior;
use Exception;

abstract class Duck
{
    protected $_flyBehavior;
    protected $_quackBehavior;

    abstract function display();

    public function performFly()
    {
        if(!$this->_flyBehavior instanceof FlyBehavior) {
            throw new Exception('Fly behavior is not instanceof App\SimUDuck\Interfaces\FlyBehavior', 100);
        }

        return $this->_flyBehavior->fly();
    }
    
    public function performQuack()
    {
        if(!$this->_quackBehavior instanceof QuackBehavior) {
            throw new Exception('Quack behavior is not instanceof App\SimUDuck\Interfaces\QuackBehavior', 100);
        }

        return $this->_quackBehavior->quack();
    }
}