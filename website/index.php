<style>
    .img{width:100px}
    </style>

<?php
include('../connection/connection.php');
$product = array();   
$sql = "select *from product";
$r = $conn->query($sql);
$itemCount = $r->num_rows;
if($itemCount>0){
 
  $product['body'] = array();
  $product['itemcount'] = $itemCount;

  while($row = $r->fetch_ASSOC()){
      extract($row);
      $e = array(
       
        "pname"=>$pname,
        "prate"=>$prate,
        "pqty"=>$pqty,
        "image"=>$image,
);
      array_push($product['body'],$e);
}
 
   json_encode($product["body"]);



}
$item =  $product["body"];
    for($i=0;$i<count($item);$i++){
      $pname =$item[$i]['pname'];
      $img =$item[$i]['image'];
        echo "<div>";
        echo "<img src='../admin/images/$img' class='img'/>";
        echo "<p>$pname</p>";
        
        echo "</div>";
    }



?>