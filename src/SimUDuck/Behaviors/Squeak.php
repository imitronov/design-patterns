<?php

namespace App\SimUDuck\Behaviors;

use App\SimUDuck\Interfaces\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        return 'Squeak';
    }
}