<?php

namespace App\SimUDuck\Behaviors;

use App\SimUDuck\Interfaces\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        return 'Quack';
    }
}