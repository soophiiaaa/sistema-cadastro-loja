<?php

namespace Lacerda\Commercial\Models;

class Food extends Product
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

    public function needsRefrigeration()
    {
        if ($this->refrigeration === true) {
            echo "Needs refrigeration\n";
        }

        echo "Does not require refrigeration\n";
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
