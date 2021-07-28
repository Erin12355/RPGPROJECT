<?php
    $con=new mysqli("localhost","root","","admindb") or die("Error");
    if(isset($_POST['sbtn'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $sql="select * from admintable where `Name`='".$name."'";
        $query=$con->query($sql);
        if(mysqli_num_rows($query)>0){
            echo "<h2 style='color: red; align: center;'>User Already Exist! Please try again with another username<h2>";
            echo "<a href='log_in.php'>Click here to go to Log In Page</a>";
        }else{
            $ins="insert into admintable(Name,Password) values ('$name','$password')";
            $chk=mysqli_query($con,$ins);
            if($chk){
                echo "Admin Sign Up Successful";
            }
            else{
                echo "Error Signing up. Please contact your website developer";
            }
        }
    }else{
        echo "<h2 style='color: red; align: center;'>Please sign up properly<h2>";
    }
?>