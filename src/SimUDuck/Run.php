<?php

namespace App\SimUDuck;

use App\SimUDuck\Ducks\MalladarDuck;
use App\SimUDuck\Ducks\RubberDuck;

class Run
{
    public function __construct()
    {
        echo '<pre>';

        $duck = new MalladarDuck();
        echo $duck->display() . PHP_EOL;
        echo $duck->performFly() . PHP_EOL;
        echo $duck->performQuack() . PHP_EOL;
        echo PHP_EOL;
        
        $duck = new RubberDuck();
        echo $duck->display() . PHP_EOL;
        echo $duck->performFly() . PHP_EOL;
        echo $duck->performQuack() . PHP_EOL;
        echo PHP_EOL;
        
        echo '</pre>';        
    }
}
