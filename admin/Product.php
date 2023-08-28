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
            <button type="submit" name="submit" value="add">Add Product</button>
        </form>
        </div>
</div>
<?php
if(isset($_POST['submit'])){
echo $_POST['pname'];
echo $_POST['prate'];
echo $_POST['pqty'];
}
?>
