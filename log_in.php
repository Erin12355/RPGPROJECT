<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel = "icon" href = "images/logo_latest.png" type = "image/x-icon">
    <style>
        body{background-image: url(images/backgrnd.jpg);background-repeat: no-repeat;background-size:cover;
        }
        .container{max-width: 70%;height:650px;text-align: center;margin-left:auto;margin-right: auto;font-family: 'Lobster', cursive;background-color:rgba(240, 248, 255, 0.651);
        }
        img{width:300px;height:300px;
        }
        label{font-size: 20px;font-weight: bold;
        }
        .boxes{margin-top: 100px;
        }
        .contain{margin-bottom:15px;height:25px;width:20%;border-radius: 5px;
        }
        button{width:15%;height:35px;font-size:20px;font-family: 'Lobster', cursive;margin-top: 20px;border-radius: 10px;
        }
        button:hover{background-color: rgb(247, 150, 39);
        }
        @media (max-width:800px){.container{width:600px;}
        button{width:50%;}
        body{text-align:center;background-size: cover;}
        .logo{ width:100%;}
        .contain{ width:50%;}
        .boxes{margin-top: 50px;}
        img{width:200px;height:200px;}
        }      
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="images/logo_latest.png" alt="RPG_logo"></a>
        </div>
        
        <div class="boxes">
            <form method="POST" action="" >
            <div class="username">
            <label for="error msg" id="errorarea" style="visibility: hidden;"></label><br>
                <label for="username">User_Name</label><br>

                <input type="text" id="username" name="name" class="contain" >
            </div>
            <div class="password">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" class="contain">
            </div>
            <div class="login"><button type="submit" name="sbtn">LOG-IN</button></div>
        </form>
        </div>
    </div>
    <?php
    $con=new mysqli("localhost","root","") or die ("Error connecting to MAIN DB".$con->error());
    $con->select_db("admindb") or die("Error in connecting to admindb".$con->error());

    if(isset($_POST['sbtn'])){
        $name=$_POST['name'];
        $pass=$_POST['password'];
        $chk=mysqli_query($con,"select * from admintable where Name='".$name."' and Password='".$pass."'");
        if(mysqli_num_rows($chk)<1){
            echo '<script>document.getElementById("errorarea").style.visibility="visible"; document.getElementById("errorarea").innerHTML="Error in Username or Password";document.getElementById("errorarea").style.color="red";</script>';
        }
        else{
            header("location: rpg_registration.html");
        }
        

    }
?>
</body>
</html>