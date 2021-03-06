<?php

namespace App\WeatherStation\Object;

use App\WeatherStation\Interfaces\DisplayElement;
use App\WeatherStation\Interfaces\Observer;
use App\WeatherStation\Interfaces\Subject;

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

    public function update()
    {
        $this->_temperature = $this->_weatherData->getTemperature();
        $this->_humidity = $this->_weatherData->getHumidity();
        $this->display();
    }

    public function display()
    {
        echo "Current conditions: " . $this->_temperature . "C degrees and " . $this->_humidity . "% humidity" . PHP_EOL;
    }
}