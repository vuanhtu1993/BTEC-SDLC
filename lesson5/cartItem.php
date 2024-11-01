<?php

class CartItem {
    private $product;
    private $quantity;

    public function __construct(Product $product, $quantity = 1) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct(): Product {
        return $this->product;
    }

    public function getQuantity(): int {
        return (int)$this->quantity;
    }

    public function setQuantity($quantity): void {
        $this->quantity = $quantity;
    }

    public function getTotalPrice(): float {
        return (float)$this->product->getPrice() * $this->quantity; 
    }
}