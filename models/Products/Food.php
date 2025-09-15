<?php

class Food extends Product {
    private string $validity;
    private string $weight;
    private array $ingredients;
    private bool $refrigeration;

    public function __construct(string $validity, string $weight, array $ingredients, bool $refrigeration) {
        parent::__construct($name, $description, $price);
        $this->validity = $validity;
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        $this->refrigeration = $refrigeration;
    }
}
