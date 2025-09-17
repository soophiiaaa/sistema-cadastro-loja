<?php

namespace Lacerda\Commercial\Models;

class Electronic extends Product
{
    private int $warranty;
    private string $brand;

    public function __construct(string $id, string $name, string $description,
    float $price, int $quantity, int $warranty, string $brand)
    {
        parent::__construct($id, $name, $description,
        $price, $quantity);
        $this->warranty = $warranty;
        $this->brand = $brand;
    }

    public function __toString(): string
    {
        return "{$this->id}, {$this->name}, {$this->description}, 
        {$this->brand}";
    }

    public function checkWarranty(int $use):string 
    {
        if ($this->warranty < $use) {
            return "Product is out of warranty\n";
        }

        $remainingPeriod = $this->warranty - $use;

        return "Product under warranty! Remaining period: {$remainingPeriod}\n";
    }
}
