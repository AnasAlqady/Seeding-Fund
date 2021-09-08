<?php
include_once ("../include/config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['email']) && isset($_POST['email']))
        $email = htmlspecialchars($_POST['email']);
    }else{
        header("location:../login.php");
    }
    if(!empty($_POST['password']) && isset($_POST['password'])){
        $password = htmlspecialchars($_POST['password']);
    }else{
        header("location:../login.php");
    }


    $password = md5($password);
    $query = "SELECT id FROM users WHERE email ='$email' AND password ='$password' "; //11
    $execute= $mysql->query($query);
    if ($execute->num_rows === 1 ) {
       $x =  $_SESSION['user'] = $execute->fetch_assoc()["id"];
        $query = "SELECT *FROM users WHERE id =$x";
        $execute = $mysql->query($query)->fetch_array();
        if ($execute[5] == 1) {
         header("location:../admin/index.php");
         $_SESSION['admin']= $execute[5];
        }
        else 
        {
            header("location:../users/index.php");
            $_SESSION['user']= $execute[0];
        }
        }
    else
    {
         header("location:../login.php");
         die;
     }























//    $query = "SELECT id FROM users WHERE email = ? AND password = ?";
//    $stet = $mysql->prepare($query);
//    $stet->bind_param("ss",$p1,$p2);
//    $p1 = $email;
//    $p2 = md5($password);

//}    $query = "SELECT id FROM users WHERE email =? AND password =?"; //11
////    $stet ="SELECT id FROM users WHERE email =? AND password =?";;
////    $p1 = $email;
//////    $p2 = md5($password);
//////    $stet->bind_param("ss",$p1,$p2);