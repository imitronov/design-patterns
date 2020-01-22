<?php

namespace App\SimUDuck\Ducks;

use App\SimUDuck\Base\Duck;
use App\SimUDuck\Behaviors\FlyNoWay;
use App\SimUDuck\Behaviors\Quack;

class DynamicDuck extends Duck
{
    public function __construct()
    {
        $this->_flyBehavior = new FlyNoWay();
        $this->_quackBehavior = new Quack();
    }

    public function display()
    {
        return 'I`m Dynamic Duck';
    }
}