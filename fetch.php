<?php
    $con=new mysqli("localhost","root","") or die("Ops");
    $con->select_db("rpgdb") or die("Ops 2");

    $chk="Select * from rpgtable";
    $query=$con->query($chk);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_dataStore</title>
    <link rel = "icon" href = "images/logo_latest.png" type = "image/x-icon">
    <style>
        .container{min-width:2000px;min-height: 1000px;background-image: url(images/backgrnd.jpg);color: #fff;margin-left: auto;margin-right: auto;text-align: center;background-repeat: no-repeat;background-size:cover; }
        table{ border: 2px solid rgb(0, 0, 0);}
        table{ min-width:2000px;}
        .box { min-width: 100px;}
        header img{width: 200px;height: 200px;}
        td{padding:10px;}
        header{background-color:rgba(255, 255, 255, 0.747);}
        .printer{float:right;width:40px;height:30px;}
        button{float:right;}
        table{background-color: rgba(255, 255, 255, 0.747);color:black;}
        .mobile_display{display: none;}
        @media(max-width:800px){body{max-width:700px;max-height:700px;}.container{display: none;}.mobile_display{display:block;margin-top: 10%;color: red;}}
    </style>
</head>
<body style="min-width:2000px;">
    <div class="container">
        <header>
            <a href="index.html"><img  src="images/logo_latest.png" alt=""></a><br>
            <button onclick="window.print()"><img src="images/printer.svg" alt="" class="printer"></button>

        </header>
        <table border=1>
           
                <thead style="color:red;background-color:white;font-weight: bold;">
                    <td class="box_sl">SL NO.</td>
                    <td class="box_fname">NAME</td>
                    <td class="box_address">ADDRESS</td>
                    <td class="box_gender">GENDER</td>
                    <td class="box_dist">DISTRICT</td>
                     <!-- CHANGE      -->
                    <td class="box_cont">CONTACT NUMBER</td>
                    <td class="box_wano">WHATSAPP NUMBER</td>
                    <td class="box_mail">EMAIL</td>
                    <td class="box_occu">OCCUPATION</td>
                    <td class="box_highqual">HIGHEST QUALIFICATION</td>
                    <td class="box_dob">DATE OF BIRTH</td>
                    <td class="box_course">COURSE</td>
                    <td class="box_course">PASSPORT PHOTO</td>
                    <td class="box_course">SIGNATURE</td>
                    <!-- CHANGE   -->
                </thead>
   <?php
    while($row=$query->fetch_array(MYSQLI_ASSOC)){
        ?>
            <tr>
               <td class="box_sl"><?php echo $row['SL'];?></td>
               <td class="box_fname"><?php echo $row['FullName'];?></td>
               <td class="box_address"><?php echo $row['Address'];?></td>
               <td class="box_gender"><?php echo $row['Gender'];?></td>
               <td class="box_dist"><?php echo $row['District'];?></td>
                <!-- CHANGE      -->
               <td class="box_cont"><?php echo $row['ContactNumber'];?></td>
               <td class="box_wano"><?php echo $row['WhatsAppNumber'];?></td>
               <td class="box_mail"><?php echo $row['Email'];?></td>
               <td class="box_occu"><?php echo $row['Occupation'];?></td>
               <td class="box_highqual"><?php echo $row['HighestQualification'];?></td>
               <td class="box_dob"><?php echo $row['DateOfBirth'];?></td>
               <td class="box_course"><?php echo $row['Course'];?></td>
               <td class="box_course"><?php echo "<a target='_blank' href='view.php?id=".$row['SL']."'><img src='data:image;base64,".base64_encode($row['Passport'])."' alt='Image' style='width: 100px; height: 100px;'></a>" ?></td>
               <td class="box_course"><?php echo "<a target='_blank' href='viewSig.php?id=".$row['SL']."'><img src='data:image;base64,".base64_encode($row['Signature'])."' alt='Image' style='width: 100px; height: 100px;'></a>" ?></td>
            </tr>

<?php
}
?>

        </table>
    </body>
</html>