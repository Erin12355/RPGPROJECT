<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url(images/backgrnd.png);
            background-size:cover;
            background-repeat: no-repeat;   
            color: white;
        }
        .container{
            text-align:center;
            margin-left:auto;
            margin-right:auto;
            margin-top: 10%;
            
        }
        input{
            padding:5px;
            padding-left:20px;
            padding-right: 20px;
            margin-right: 20px;
            margin-left: 20px;
        }
        button{
            padding:5px;
            padding-left:10px;
            padding-right: 10px;
        }
        button:hover{
            background-color:red;
        }
        header{
            background-color:rgba(240, 248, 255, 0.767);
            height:200px;
            width: 100%;
            text-align:center;
        }
        img{
            height:200px;
            width:200px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="images/logo_latest.png" alt="RPG_logo"></a>
        </div>
    </header>
    <div class="container">
        <form method="POST" action="">
            <label for="" id="this" style="font-size:20px; visibility: hidden; color: red;background-color:white;"></label><br><br>
            <label for="" style="font-size:20px">STUDENT-ID:</label>
            <input type="text" id="id" name="id" placeholder="----Enter student id----">
            <button name="sbtn" type="submit">DELETE</button>
            <button type="submit">RESET</button>
        </form>
    </div>
</body>
</html>
<?php
    include 'deletestu.php';
?>