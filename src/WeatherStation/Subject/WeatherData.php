<?php

namespace App\WeatherStation\Subject;

use App\WeatherStation\Interfaces\Observer;
use App\WeatherStation\Interfaces\Subject;

class WeatherData implements Subject
{

    private $_observers;
    private $_temperature;
    private $_humidity;
    private $_pressure;

    public function __construct()
    {
        $this->_observers = [];
    }

    public function registerObserver(Observer $o)
    {
        if(!in_array($o, $this->_observers)) {
            $this->_observers[] = $o;
        }
    }

    public function removeObserver(Observer $o)
    {
        $key = array_search($o, $this->_observers);
        if($key !== false) {
            unset($this->_observers[$key]);
        }
    }

    public function notifyObservers()
    {
        foreach($this->_observers AS $observer) {
            $observer->update($this->_temperature, $this->_humidity, $this->_pressure);
        }
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->_temperature = $temperature;
        $this->_humidity = $humidity;
        $this->_pressure = $pressure;
        $this->measurementsChanged();
    }
}