<?php 
require_once 'Connexion.php';
require_once 'Product.php';

class Category extends Connexion{

    private ?int $id;
    private ?string $name;
    private ?string $description;
    private DateTime $createdAt;
    private ?DateTime $updatedAt;

    public function __construct($id=null, $name=null, $description=null, $createdAt=null, $updatedAt=null){

        parent::__construct();

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();


    }



    public function getProducts(){


        $sql = "SELECT * FROM products WHERE category_id = :id";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([':id' => $this->id]); 
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $products = [];
        foreach ($data as $value) {

            $product = new Product(
                $value['id'], 
                $value['category_id'], 
                $value['name'], 
                json_decode($value['photos'], true), 
                $value['price'], 
                $value['description'], 
                $value['quantity'], 
                new DateTime($value['createdAt']),
                new DateTime($value['updatedAt']), 
                
            );

            array_push($products, $product);
        }


        return $products;
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