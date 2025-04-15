<?php
namespace EdemotsCourses\EsgiDesignPattern\Exercice2;

use EdemotsCourses\EsgiDesignPattern\Exercice2\ShippingMethod;

class SeaShipping implements ShippingMethod {

    public array $estimatedDays = [7,14];

    public float $cost = 30;

    public string $trackingNumber = "SEA";

    public function getEstimatedDays():array{
        return $this->estimatedDays;
    }

    public function calculateCost(float $weight, float $distance):float{
        return $this->cost + (0.5*$weight) + (0.3*$distance);
    }

    public function formatTracking(string $trackingNumber): string
    {
        return $this->trackingNumber."-".$trackingNumber;
    }
}