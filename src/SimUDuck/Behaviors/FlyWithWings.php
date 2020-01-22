<?php

namespace App\SimUDuck\Behaviors;

use App\SimUDuck\Interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        return 'I`m flying!!';
    }
}