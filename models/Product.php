<?php

class Product {
    private string $name;
    private string $description;
    private float $price;

    public function __construct(string $name, string $description, float $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getDescription() : string {
        return $this->description;
    }

    public function getPrice() : float {
        return $this->price;
    }

    public function setPrice(float $newPrice) {
        $this->price = $newPrice;
    }
}
