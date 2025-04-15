<?php
namespace EdemotsCourses\EsgiDesignPattern\Exercice2;

use EdemotsCourses\EsgiDesignPattern\Exercice2\ShippingMethod;

class GroundShipping implements ShippingMethod{
    public array $estimatedDays = [3,5];

    public float $cost = 10;

    public string $trackingNumber = "GRD";

    public function getEstimatedDays():array{
        return $this->estimatedDays;
    }

    public function calculateCost(float $weight, float $distance):float{
        return $this->cost + (1*$weight) + (0.5*$distance);
    }

    public function formatTracking(string $trackingNumber):string{
        return $this->trackingNumber."-".$trackingNumber;
    }
}