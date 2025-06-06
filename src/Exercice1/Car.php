<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice1;

use EdemotsCourses\EsgiDesignPattern\Exercice1\Vehicle;

class Car implements Vehicle
{

    public float $speed = 0;

    public function accelerate(){
        $this->speed+=3.5;
        return $this->speed;
    }


    public function breaks(){
        if($this->speed - 5 < 0){
            $this->speed=0;
        }else{
            $this->speed-=5;
        }
        return $this->speed;
    }

}
