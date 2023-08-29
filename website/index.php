<?php
include('../connection/connection.php');
    
$sql = "select *from product";
$r = $conn->query($sql);
$product=[];
while($row=$r->fetch_assoc()){
   // print_r($row) ;
   $product.array_push($row);
   /*  $pname = $row['pname'];
    $prate = $row['prate'];
    $pqty = $row['pqty']; */
}
print_r($product);

?>