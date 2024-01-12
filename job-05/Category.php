<?php 
require_once 'Connexion.php';
require_once 'Product.php';

class Category extends Connexion{

    private int $id;
    private ?string $name;
    private ?string $description;
    private DateTime $createdAt;
    private ?DateTime $updatedAt;

    public function __construct($id=null, $name=null, $description=null, $createdAt=null, $updatedAt=null){

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }



    public function getProducts(){


        $sql = "SELECT * FROM category INNER JOIN products ON id.category = id_category.product WHERE id = :id";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([':id' => 7]); 
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data;
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
    public function setDescription($description){
        return $this->description = $description;
    }
    public function getDescription(){
        return $this->description;
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
}


?>