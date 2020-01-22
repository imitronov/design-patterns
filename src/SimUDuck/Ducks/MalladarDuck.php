<?php

namespace App\SimUDuck\Ducks;

use App\SimUDuck\Base\Duck;
use App\SimUDuck\Behaviors\FlyWithWings;
use App\SimUDuck\Behaviors\Quack;

class MalladarDuck extends Duck
{
    public function __construct()
    {
        $this->_flyBehavior = new FlyWithWings();
        $this->_quackBehavior = new Quack();
    }

    public function display()
    {
        return 'I`m Malladar Duck';
    }
}