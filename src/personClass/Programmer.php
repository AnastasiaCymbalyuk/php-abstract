<?php
namespace src\personClass;

use src\Worker;
use src\interface\ApplicationCreatorInterface;

class Programmer extends Worker implements ApplicationCreatorInterface
{
    public function getInfo()
    {
        return "$this->surName $this->name, позиция: программист, зарплата: $this->salary, " 
        . $this->getApplicationFeatureWork() 
        . ", класс: "
        . $this->getClass();
    }

    public function getApplicationFeatureWork()
    {
        return ApplicationCreatorInterface::application . ": $this->feature";
    }

    private function getClass()
    {
        return get_class($this);
    }
}