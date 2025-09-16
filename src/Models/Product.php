<?php

namespace Lacerda\Commercial\Models;

class Product
{
    private string $id;
    private string $name;
    private string $description;
    private float $price;
    private int $quantity;

    public function __construct(string $id, string $name, string $description,
    float $price, int $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function __toString(): string
    {
        return "{$this->id}, {$this->name}, {$this->description}";
    }

    public function __get(string $attributeName)
    {
        $method = 'get' . ucfirst($attributeName);
        return $this->method();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function setId(string $newId)
    {
        $this->id = $newId;
    }

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function setDescription(string $newDescription)
    {
        $this->description = $newDescription;
    }

    public function setPrice(float $newPrice)
    {
        $this->price = $newPrice;
    }

    public function setQuantity(int $newQuantity)
    {
        $this->quantity = $newQuantity;
    }
}
