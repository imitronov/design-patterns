<?php

namespace App\SimUDuck\Ducks;

use App\SimUDuck\Base\Duck;
use App\SimUDuck\Behaviors\FlyNoWay;
use App\SimUDuck\Behaviors\Squeak;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->_flyBehavior = new FlyNoWay();
        $this->_quackBehavior = new Squeak();
    }

    public function display()
    {
        return 'I`m Rubber Duck';
    }
}