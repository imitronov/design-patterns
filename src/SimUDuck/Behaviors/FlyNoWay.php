<?php

namespace App\SimUDuck\Behaviors;

use App\SimUDuck\Interfaces\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        return 'I can`t fly';
    }
}