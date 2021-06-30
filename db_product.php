<?php 

    include ('./connect.php');
    $sql = 'select * from `product`';
    $product1 = mysqli_query($connect , $sql);
    $row = mysqli_num_rows($product1);
    $json['sanpham']=array();
 while($product= mysqli_fetch_assoc($product1)){
    $sanpham = array(
"id" => $product['id'],
"name" => $product['name'],
"image" => $product['image'],
"price" => $product['price'],
"author" => $product['author'],
"publisher" => $product['publisher'],
"publishing_company" => $product['publishing_company'],
"number_of_page"  => $product['number_of_page'],
"info" => $product['info'],
"form" => $product['form'],
"weight" => $product['weight'],
"size" => $product['size'],
"created_time" =>  $product['created_time'],
"last_updated" => $product['last_updated']
    );
    array_push($json['sanpham'],$sanpham);
 }
 echo json_encode($json);
 
?>