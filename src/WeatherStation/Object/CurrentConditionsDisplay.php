<?php

namespace App\WeatherStation\Object;

use App\WeatherStation\Interfaces\DisplayElement;
use App\WeatherStation\Interfaces\Observer;
use App\WeatherStation\Interfaces\Subject;
use Exception;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $_temperature;
    private $_humidity;
    private $_weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->_weatherData = $weatherData;
        $this->_weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->_temperature = $temperature;
        $this->_humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo "Current conditions: " . $this->_temperature . "C degrees and " . $this->_humidity . "% humidity" . PHP_EOL;
    }
}