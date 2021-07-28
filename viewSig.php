<?php
   $con=new mysqli("localhost","root","","rpgdb") or die("Error");
    $id = isset($_GET['id'])? $_GET['id'] : "";
    $chk="Select * from rpgtable where `SL`=$id";
    $query=$con->query($chk);
    $row=$query->fetch_array(MYSQLI_ASSOC);
    header("Content-Type: ".$row['sigextension']);
    echo $row['Signature'];
?>