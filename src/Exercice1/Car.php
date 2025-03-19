<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice1;

use EdemotsCourses\EsgiDesignPattern\Exercice1\Vehicle;

class Car implements Vehicle
{
    public float $speed = 0.0;

    public function accelerate()
    {
        return $this->speed = $this->speed + 3.5;
    }

    public function brakes()
    {
        if ($this->speed >= 5.0) {
            $this->speed = $this->speed - 5.0;
        } else {
            $this->speed = 0;
        }
    }
}
