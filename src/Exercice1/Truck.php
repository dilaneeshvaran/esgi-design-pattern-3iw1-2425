<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice1;

use EdemotsCourses\EsgiDesignPattern\Exercice1\Vehicle;

class Truck implements Vehicle {

    
    public float $speed=0;


    public function accelerate(){
        $this->speed+=1.75;
        return $this->speed;
    }

    public function breaks(){
        if($this->speed - 2 < 0){
            $this->speed=0;
        }else{
            $this->speed - 2;
        }
        return $this->speed;
    }

}