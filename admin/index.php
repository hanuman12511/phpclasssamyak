<style>
    .container-view{
        width: 100%;
        height: 600px;
        background-color: aqua;
        display: inline-flex;
    }
    .container-view-left{
        width: 20%;
        height: 100%;
        background-color: rgb(98, 255, 0); 
        padding: 20px;
    }
    .container-view-right{
        width: 80%;
        height: 100%;
        background-color: rgb(255, 204, 0); 
    }
    .input-name{
        width: 100%;
        height: 60px;
    }
    .btn{
        width: 100%;
        height: 50px;
        margin-top: 20px;
        font-size: 20px;
        border: 0px;
        border-radius: 20px;
    }
    .profile-view{
        width: 100%;
        height: 200px;
        background-color: antiquewhite;
    }
    .right-top-view{
        width: 100%;
        height:100px ;
        background-color: antiquewhite;
    }
    .right-sec-view{
        width: 100%;
        height:400px ;
        background-color: rgb(227, 131, 5);
    }
</style>
<div class="container-view">
    <div class="container-view-left">
        <div class="profile-view">
        </div>
        <form action="" method="post">
        
        <button type="submit" class="btn" name="submit" value="register"> Register</button>
        <button type="submit" class="btn" name="submit" value="login">Login</button>
        <button type="submit" class="btn" name="submit" value="addproduct">AppProduct</button>
        </form>
    
    </div>
    <div class="container-view-right">
        <div class="right-top-view">
        </div>
        <div class="right-sec-view">

                <?php
    if(isset($_POST['submit']))
        { 
            if($_POST['submit'] =="register"){
                    include("register.php");
                
                  }
                  else{
                    include("login.php");
                
                  }
            }        
                ?>

        </div>
       
    </div>
</div>