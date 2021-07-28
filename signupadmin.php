<?php
    $con=new mysqli("localhost","root","") or die ("Error connecting to MAIN DB".$con->error());
    $con->select_db("rpgdb") or die("Error in connecting to admindb".$con->error());

    if(isset($_POST['sbtn'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $ins="insert into admintable(Name,Password) values ('$name','$password')";
        $chk=mysqli_query($con,$ins);
        if($chk){
            echo "OK";
        }
        else{
            echo "ERROR";
        }
    }
?>