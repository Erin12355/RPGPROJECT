<?php
    $con=new mysqli("localhost","root","") or die ("Error connecting to MAIN DB".$con->error());
    $con->select_db("admindb") or die("Error in connecting to admindb".$con->error());

    if(isset($_POST['sbtn'])){
        $name=$_POST['name'];
        $pass=$_POST['password'];
        $chk=mysqli_query($con,"select * from admintable where Name='".$name."' and Password='".$pass."'");
        if(mysqli_num_rows($chk)<1){
            echo "ERROR USERNAME OR PASSWORD";
        }
        else{
            header("location: rpg_registration.html");
        }
        

    }
?>