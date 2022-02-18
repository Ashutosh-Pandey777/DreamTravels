<?php
  $con = mysqli_connect('localhost','root');
  $f=false; $p=false;
  if ($con) {
       mysqli_select_db($con,'dreamtravels');
        $a1 = $_POST["name"];
        $a2 = $_POST["email"];
        $a3 = $_POST["password"];
        $a4 = $_POST["mobile"];
        $a5 = $_POST["user"];
        $a6 = $_POST["address"];
        $a7 = $_POST["User_Id"];


        $sql1 = "SELECT `User_Id` FROM `signup` WHERE User_Id = '".$a7."'" ;
        $a1=mysqli_query( $con,$sql1) ;
        $res1 = mysqli_fetch_array($a1,MYSQLI_NUM);
           if($res1[0]===$a7)
           {
               $p=true;
           }
           else {
             $query = "INSERT INTO `signup`(`Name`, `email`, `password`, `mobile`, `userType`, `address`, `User_Id`, `picsource`) VALUES ('$a1','$a2','$a3','$a4' ,'$a5' ,'$a6','$a7')";
      //  $i = "INSERT INTO signup ( Name, email, password, mobile, userType, address,User_Id) VALUES ('$a1','$a2','$a3','$a4' ,'$a5' ,'$a6','$a7')";

      if(!mysqli_query($con,$i))
      {
          echo "not inserted";
      }
      else {
      $f=true;
      }
}
    }
  else {
    echo "DB connection not established";
  }
  mysqli_close($con);
  if($p)
      header("Location:signUp.php?i= This User_Id already exists");
  if($f)
  header("Location: ..\index.php");
 ?>
