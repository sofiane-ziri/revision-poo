<?php

class Product{
    private ?int $id;
    private ?int $category_id;
    private ?string $name;
    private ?array $photos;
    private ?int $price;
    private ?string $description;
    private ?string $quantity;
    private ?DateTime $createdAt;
    private ?DateTime $updatedAt;

public function __construct($id=null, $category_id=null, $name=null, $photos=null, $price=null, $description=null, $quantity=null, $createdAt=null, $updatedAt=null){

    $this->id = $id;
    $this->category_id = $category_id;
    $this->name = $name;
    $this->photos = $photos;
    $this->price = $price;
    $this->description = $description;
    $this->quantity = $quantity;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
}


    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;

    }
    
    public function setName($name){
        return $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setPhotos($photos){
        return $this->photos = $photos;
    }
    public function getPhotos(){
        return $this->photos;
    }

    public function setPrice($price){
        return $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setDescription($description){
        return $this->description = $description;
    }
    public function getDescription(){
        return $this->description;
    }   

    public function setQuantity($quantity){
        return $this->quantity = $quantity;
    }       

    public function getQuantity(){
        return $this->quantity;
    }   

    public function setCreatedAt($createdAt){
        return $this->createdAt = $createdAt;
    }   

    public function getCreatedAt(){
        return $this->createdAt;
    }

    public function setUpdatedAt($updatedAt){
        return $this->updatedAt = $updatedAt;
    }   

    public function getUpdatedAt(){
        return $this->updatedAt;
    }
    public function setCategoryId($category_id){
        return $this->category_id = $category_id;
    }
    public function getCategoryId(){
        return $this->category_id;
    }

}


?>