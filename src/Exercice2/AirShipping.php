<?php
namespace EdemotsCourses\EsgiDesignPattern\Exercice2;

use EdemotsCourses\EsgiDesignPattern\Exercice2\ShippingMethod;

class AirShipping implements ShippingMethod{
    public array $estimatedDays = [1,2];

    public float $cost = 50;

    public string $trackingNumber = "AIR";

    public function getEstimatedDays():array{
        return $this->estimatedDays;
    }

    public function calculateCost(float $weight, float $distance):float{
        return $this->cost + (3*$weight) + (2*$distance);
    }

    public function formatTracking(string $trackingNumber):string{
        return $this->trackingNumber."-".$trackingNumber;
    }
}