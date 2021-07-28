<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url(images/backgrnd.jpg);
            background-size:cover;
            background-repeat: no-repeat;   
        }
        .container{
            text-align:center;
            margin-left:auto;
            margin-right:auto;
            
        }
        button{
            padding:20px;
            margin-left: 20px;
            border-radius: 10px;
            font-size: 20px;
            font-style: italic;
            margin-top: 10%;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        button:hover{
            background-color: orangered;
        }
        a{
            text-decoration: none;
        }
        header{background-color:rgba(255, 255, 255, 0.747);
            max-height: 300px;
            align-items: center;
            border-radius:10px;
            padding-top: -50px; 
         }
        img{
            width: 300px;
            height: 250px;
            text-align: center;
            max-height: 300px;  }

    </style>
</head>
<body>
    <div class="container">
        <header>
                    <?php
                if(count($_COOKIE)>0){
                    echo ""; // for future use to DISPLAY USERNAME
                }else;
            ?>
            <a href="index.html"><img  src="images/logo_latest.png" alt=""></a><br>
        </header>
        
        <a href="fetch.php"><button>ADMIN_DATA_VIEW</button></a>
        <a href="delete_details.php"><button>DELETE_STUDENT_DETAILS</button></a>
        <a href="logout.php"><button type="button">Log Out</button>
    </div>
</body>
</html>