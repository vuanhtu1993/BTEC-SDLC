<?php

class Product {
    public function __construct(private $name, private $id, private $price, private $description) {
        // Constructor code goes here
        echo "Constructing Product";
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }
}