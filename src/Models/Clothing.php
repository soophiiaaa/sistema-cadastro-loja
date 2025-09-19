<?php

namespace Lacerda\Commercial\Models;

class Clothing extends Product
{
    private array $sizes;
    private string $material;

    public function __construct(string $id, string $name, string $description, float $price, int $quantity, array $sizes, string $material)
    {
        parent::__construct($id, $name, $description, $price, $quantity);
        $this->sizes = $sizes;
        $this->material = $material;
    }

    public function __toString(): string
    {
        return "{$this->id}, {$this->name}, {$this->description}, 
        {$this->size}, {$this->material}";
    }

    public function checkAvaliability(string $desiredSize) 
    {
        foreach ($this->sizes as $size) {
            if ($size === $desiredSize) {
                echo "Available size!\n";
                return;
            }
        }

        echo "Size not available!\n";
    }

    public function getSizes(): array
    {
        return $this->sizes;
    }

    public function getMaterial(): string
    {
        return $this->material;
    }
}
