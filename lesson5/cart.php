<?php

class Cart {

    private $items = [];
    public function addProduct(Product $product) {
        $productId = $product->getId();
        if(isset($this->items[$productId])) {
            $productQuantity = $this->items[$productId]->getQuantity();
            $this->items[$productId]->setQuantity($productQuantity + 1);
        }   else {
            $this->items[$productId] = new CartItem($product);
        }
    }

    public function removeProduct($productId) {
         
    }

    public function getItems() {
        return $this->items;
    }   
    
    public function displayCart() {
        foreach($this->items as $item) {
            $product = $item->getProduct();
            echo "Sản phẩm". $product->getId()." : " . $product->getName() . "<br>";
            echo "Số lượng: ". $item->getQuantity() . "<br>";
            echo "Thành tiền: ".$item->getTotalPrice() . "<br>";
            echo "=============="."<br>";
        }
    }
}