<?php
error_reporting(0);
include 'header.php'
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="" method="post" enctype="multipart/form-data">
       <input type="file" name="img" value="">
       <input type="submit" name="" value="upload">
     </form>
   </body>
 </html>
 <?php

  $filename= $_FILES["img"]["name"];
  $tempname =  $_FILES["img"]["tmp_name"];
$folder="profilePic/".$filename;
echo $folder;
move_uploaded_file($tempname,$folder);
  ?>




  <?php
  error_reporting(0);
  //<b>MY Profile</b>
   ?>

   <form class="" action="" method="post" enctype="multipart/form-data">
     <input type="file" name="img" value="">
     <input type="submit" name="" value="upload">
   </form>
   <?php


     $filename= $_FILES["img"]["name"];
     $tempname =  $_FILES["img"]["tmp_name"];
   $folder="profilePic/".$filename;
   echo $folder;
   move_uploaded_file($tempname,$folder);
 $query = "INSERT INTO signup VALUES(picsource,'$folder')";
 $data=mysqli_query($conn,$query);
  echo "<img src='$folder' alt='' height='100' width='100'>";
  include 'footer.php';
    ?>
