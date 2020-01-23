<?php

namespace App\WeatherStation;

use App\WeatherStation\Object\CurrentConditionsDisplay;
use App\WeatherStation\Subject\WeatherData;

class WeatherStation
{
    public function run()
    {
        $wd = new WeatherData();
        $ccd = new CurrentConditionsDisplay($wd);

        echo '<pre>';
        
        $wd->setMeasurements(80, 65, 30.4);
        $wd->setMeasurements(82, 70, 29.2);
        $wd->setMeasurements(78, 90, 29.2);

        echo '</pre>';
    }
}