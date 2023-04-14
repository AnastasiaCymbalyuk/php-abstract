<?php
namespace src\personClass;

use src\Worker;
use src\interface\LeadInterface;

class Director extends Worker implements LeadInterface
{
    public function getInfo()
    {
        return "$this->surName $this->name, позиция: директор, зарплата: $this->salary, " 
        . $this->getLeadFeatureWork() 
        . ", класс: "
        . $this->getClass();
    }

    public function getLeadFeatureWork()
    {
        return LeadInterface::lead . ": $this->feature";
    }

    private function getClass()
    {
        return get_class($this);
    }
}