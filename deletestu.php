<?php
    $con=new mysqli("localhost","root","","rpgdb") or die("Error");
    if(isset($_POST['sbtn'])){
        $id=$_POST['id'];
        $checkvail="select * from rpgtable where `SL`='".$id."'";
        $checkvail_query=$con->query($checkvail);
        if(mysqli_num_rows($checkvail_query)<1){
            echo '<script>alert("ID NOT FOUND!");document.getElementById("id").focus();</script>';
        }else{
            $row=$checkvail_query->fetch_array(MYSQLI_ASSOC);
            $sql = "delete from rpgtable where `SL`='$id'";
            if($con->query($sql)===TRUE){
                echo '<script>document.getElementById("this").style.visibility="visible"; document.getElementById("this").innerHTML="Deleted Successfully";</script>';
            }else{
                echo $con->error;
            }
        }
        
    }
?>