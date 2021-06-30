<?php 
class Product {
     private $conn;
     private $table = 'product';

     //product properties
public $id;
public $name;
public $image;
public $price;
public $author;
public $publishing_company;
public $pulisher;
public $number_of_page;
public $form;
public $weight;
public $size;
public  string $info;
public $created_time;
public $last_updated;

    public function __construct($db)
    {
     $this->conn = $db;   
    }
    //Get post 
    public function read() {
        // create query 
         //prepare statement 
    $stmt = $this->conn->prepare("SELECT * FROM `product`");
    $stmt->execute();
    return $stmt;
    }
 }
?>