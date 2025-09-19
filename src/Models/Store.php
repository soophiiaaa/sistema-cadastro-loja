<?php

namespace Lacerda\Commercial\Models;

class Store 
{
    private array $products;

    public function __construct()
    {   
        $this->products = [];
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function buyProduct(string $id, int $quantity)
    {
        foreach ($this->products as $product) {
            if ($product->id === $id) {
                if ($product->quantity > $quantity) {
                    echo "Purchase made successfully\n";
                    $product->setQuantity($product->getQuantity() - $quantity);
                    return;
                } else {
                    echo "Insufficient quantity available\n";
                }
            }
        }
        echo "Product not found or non-existent\n";
    }

    public function getProductById(string $id)
    {
        foreach ($this->products as $product) {
            if ($product->id === $id) {
                var_dump($product);
                return;
            }
        }
        echo "Product not found or non-existent\n";
    }

    public function deleteProduct(string $name)
    {
        foreach ($this->products as $index => $product) {
            if ($product->name === $name) {
                unset($this->products[$index]);
                echo "Product removed succesfully\n";
                return;
            }
        }
        echo "Product not found or non-existent\n";
    }

    public function showProducts()
    {
        foreach ($this->products as $item) {
            echo "=================================\n";
            echo "Name: {$item->name}\nDescription: {$item->description}\nPrice (R$): {$item->price}\n";
        }
        echo "=================================\n";
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
