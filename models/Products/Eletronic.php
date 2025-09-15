<?php

class Eletronic extends Product {
    private int $warranty;
    private float $consumption;
    private string $brand;
    private string $voltage;

    public function __construct(int $warranty, float $consumption, string $brand, string $voltage) {
        parent::__construct($name, $description, $price);
        $this->warranty = $warranty;
        $this->consumption = $consumption;
        $this->brand = $brand;
        $this->voltage = $voltage;
    }
}
