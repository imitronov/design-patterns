<?php

namespace App\SimUDuck;

use App\SimUDuck\Behaviors\FlyWithWings;
use App\SimUDuck\Ducks\DynamicDuck;
use App\SimUDuck\Ducks\MalladarDuck;
use App\SimUDuck\Ducks\RubberDuck;

class SimUDuck
{
    public function run()
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
        
        $duck = new DynamicDuck();
        echo $duck->display() . PHP_EOL;
        echo $duck->performFly() . PHP_EOL;
        $duck->setFlyBehavior(new FlyWithWings());
        echo $duck->performFly() . PHP_EOL;
        echo $duck->performQuack() . PHP_EOL;
        echo PHP_EOL;
        
        echo '</pre>';        
    }
}
