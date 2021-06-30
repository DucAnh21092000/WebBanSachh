<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
include_once ('../../php/database.php');
include_once ('../../php/models/post.php');

//Instantiate BB và connect 
$database =new Database();
$db = $database->connect();

$product = new Product($db);
$read = $product -> read();
$num = $read -> rowCount();
class StringValue implements JsonSerializable {
    public function __construct($string) {
             $this->string = (string) $string;
         }
     
         public function jsonSerialize() {
             return $this->string;
        }
    }
    class ArrayValue implements JsonSerializable {
             public function __construct(array $array) {
                 $this->array = $array;
             }
         
             public function jsonSerialize() {
                 return $this->array;
             }
        }
   
if($num >0) {
    $product_arr['data'] = array(); 
    while ($row = $read ->fetch(PDO::FETCH_ASSOC)){
extract($row); 
    $product_items = array( "id" => $id
                            );
array_push($product_arr['data'],$product_items);                                                 }
echo json_encode($product_arr);
}

?>