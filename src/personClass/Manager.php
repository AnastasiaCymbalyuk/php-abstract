<?php
namespace src\personClass;

use src\Worker;
use src\interface\WebinarSpeakerInterface;

class Manager extends Worker implements WebinarSpeakerInterface
{
    public function getInfo()
    {
        return "$this->surName $this->name, позиция: менеджер, зарплата: $this->salary, " 
        . $this->getWebinarFeatureWork() 
        . ", класс: "
        . $this->getClass();
    }

    public function getWebinarFeatureWork()
    {
        return WebinarSpeakerInterface::webinar . ": $this->feature";
    }

    private function getClass()
    {
        return get_class($this);
    }
}