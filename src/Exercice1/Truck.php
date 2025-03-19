<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice1;

use EdemotsCourses\EsgiDesignPattern\Exercice1\Vehicle;

class Truck implements Vehicle {

    public float $speed = 0.0;
    public function accelerate ()
    {
        return $this->speed = $this->speed + 1.75;
    }

    public function brakes ()
    {
        if ($this->speed >= 2.0) {
            $this->speed = $this->speed - 2.0;
        } else {
            $this->speed = 0;
        }
    }
}