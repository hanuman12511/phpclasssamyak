<?php
//echo $_GET['name'];
$pname =$_GET['name'];
include('../connection/connection.php');
$sql = "delete from product where pname='$pname'";
//echo $sql;
$r = $conn->query($sql);
if($r){
    header('location:index.php');
}
else{
    echo "not delete";
}
?>