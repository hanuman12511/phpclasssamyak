

<?php
//create table product(pname char(100), prate float, pqty int );
include("../connection/connection.php");
//print_r ($conn);
?>
<style>

    .container{
width: 100%;
height: auto;
background-color: aquamarine;
    }
    
    .product-div{
width: 40%;
height: 400px;
background-color: rgb(225, 127, 255);
margin: auto;
    }
    .product-div input ,button{
        width: 100%;
        height: 60px;
        margin-top: 10px;
        font-size: 30px;
    }
    </style>


<div class="container">
    
    <div class="product-div">
    <form action="" method="post">
            <input type="txt" name="pname" placeholder="enter product name.." /><br>
            <input type="txt" name="prate"  placeholder="enter product rate.." /><br>
            <input type="txt" name="pqty"   placeholder="enter product qty.."/><br>
            <button type="submit" name="submit" value="addproduct">Add Product</button>
        </form>
        </div>
</div>
<?php
if(isset($_POST['submit'])){
$pname= $_POST['pname'];
$prate= $_POST['prate'];
$pqty= $_POST['pqty'];
$sql = "insert into product values('$pname','$prate','$pqty')";
if($conn->query($sql)===TRUE){
    echo "insert date";
}
//echo $sql;

}
?>

<style>
    .showproduct{
        width: 100%;
        background-color: rgb(225, 127, 255);
        
    }
    </style>
<table class="showproduct">
    <tr><td>ProductNAme</td><td>Product rate</td><td> product qty</td><td></td></tr>
<?php

$sql = "select *from product";
$r = $conn->query($sql);
while($row=$r->fetch_assoc()){
   // print_r($row) ;
   
    $pname = $row['pname'];
    $prate = $row['prate'];
    $pqty = $row['pqty'];
echo "<tr><td>$pname</td><td>$prate</td><td>$pqty</td><td><a href='delete.php?name=$pname'>delete</a></td></tr>
"; 
}

?>
</table>
