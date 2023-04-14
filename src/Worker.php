<?php 

namespace src;

abstract class Worker
{
    protected string $name;
    protected string $surName;
    protected int $salary;
    protected string $feature;

    public function __construct(string $name, string $surName, int $salary, string $feature)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->salary = $salary;
        $this->feature = $feature;
    }

    abstract public function getInfo();
    
    public function getSalary()
    {
        return $this->salary;
    }
}