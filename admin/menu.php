<?php
include('../connection/connection.php');

?>

<style>
    .container{
        width: 100%;
        height: 300px;
        background-color: aqua;
    }
    .form-div{
        width: 30%;
        height: 100%;
        background-color: bisque;
        margin: auto;
    }
</style>
<div class="container">
    <div class="form-div">
        <h1>Enter Menubar name</h1>
        <form action="" method="post">
        <input type="txt" name="menu" placeholder="enter menu " />
        <button type="submit" class="btn" name="submit" value="menu">Add Menu</button>
        </form>
        </div>
    </div>


    <?php
if(isset($_POST['submit'])){
$menu= $_POST['menu'];
$sql = "insert into menubar values('$menu')";
if($conn->query($sql)===TRUE){
    echo "insert date";
}
//echo $sql;

}
?>


<table class="showproduct">
    <tr><td>ProductNAme</td><td>Product rate</td><td> product qty</td><td></td></tr>
<?php

$sql = "select *from menubar";
$r = $conn->query($sql);
while($row=$r->fetch_assoc()){
   // print_r($row) ;
   
    $menu = $row['menu'];
echo "<tr><td>$menu</td><td><a href='deletemenu.php?name=$menu'>delete</a></td></tr>
"; 
}

?>
</table>
