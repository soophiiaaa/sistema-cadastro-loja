<?php

namespace Lacerda\Commercial\Models;

use Lacerda\Commercial\Contracts\ProductManager;

class Food extends Product implements ProductManager
{
    private bool $refrigeration;
    private string $category;

    public function __construct(string $id, string $name, string $description,
    float $price, int $quantity, bool $refrigeration, string $category)
    {
        parent::__construct($id, $name, $description,
        $price, $quantity);
        $this->refrigeration = $refrigeration;
        $this->category = $category;
    }

    public function __toString(): string
    {
        return "{$this->id}, {$this->name}, {$this->description}, 
        {$this->category}\n";
    }

    public function needsRefrigeration()
    {
        if ($this->refrigeration === true) {
            echo "Needs refrigeration\n";
        }

        echo "Does not require refrigeration\n";
    }

    public function applyDiscount(): float
    {
        $discount = $this->getPrice * 0.30;
        $this->setPrice($this->getPrice() - $discount);
        return $this->getPrice();
    }

    public function getRefrigeration(): bool
    {
        return $this->refrigeration;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}
