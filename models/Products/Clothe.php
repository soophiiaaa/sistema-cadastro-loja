<?php

class Clothe extends Product {
    private string $size;
    private string $color;
    private string $material;
    private string $genre;

    public function __construct(string $size, string $color, string $material, string $genre) {
        parent::__construct($name, $description, $price);
        $this->size = $size;
        $this->color = $color;
        $this->material = $material;
        $this->genre = $genre;
    }
}
