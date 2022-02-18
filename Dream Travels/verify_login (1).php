<?php

 //include("connection.php");
   session_start();
  $con = mysqli_connect('localhost','root');
  $f=false;
  $i = false;
  $p = false;

  if ($con) {
       mysqli_select_db($con,'dreamtravels');
       $uid = $_POST["User_Id"] ;
       $pass = $_POST["password"] ;
       $sql1 = "SELECT `User_Id` FROM `signup` WHERE User_Id = '".$uid."'" ;
       $a1=mysqli_query( $con,$sql1) ;
       $res1 = mysqli_fetch_array($a1,MYSQLI_NUM);
          if($res1[0]===$uid)
          {
            $sql = "SELECT `password` FROM `signup` WHERE User_Id = '".$uid."'";
            $a2=mysqli_query( $con,$sql) ;
            $res = mysqli_fetch_array($a2,MYSQLI_NUM);
              if($res[0] === $pass){
                $_SESSION['uid'] = $uid;
                $_SESSION['pwd'] = $pass;
                $f = true;
              }

              else{
                $p = true;
                }
            }
            else {
              //echo '<h3> Invalid User Id </h3>';
              $i = true;
            //header("Location:login.php");
            }

  }

   else {
         echo "DB connection not established";
       }


       mysqli_close($con);
       if($i)
        header("Location:signUp.php?q= please sign in first");
        if($p)

        header("Location:login.php?q= incorrect password");
       if($f)
       header("Location:profile.php?");
      ?>
