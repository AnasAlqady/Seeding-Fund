<?php
include_once ('../include/config.php');
$_SESSION['message']="";
//print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['email']) && !empty($_POST['email'])){
        $email =htmlspecialchars($_POST['email']);
    }
    else{
        header("location:../register.php");
    }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $_SESSION['message']="Invalid email format";
        header("location:../register.php");
    }
    if (isset($_POST['username']) && !empty($_POST['username'])){
        $username =$_POST['username'];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
            $_SESSION['message'] = "Only letters and white space allowed";
            header("location:../register.php");
          }
    } else {
        header("location:../register.php");
    }
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password =htmlspecialchars($_POST['password']);
    } else {
        header("location:../register.php");
    }
    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $phone = htmlspecialchars($_POST['phone']);
    } else {
        header("location:../register.php");
    }

    $query = "SELECT * FROM users WHERE email ='$email'"; 
    $execute = $mysql->query($query);
    if ($execute->num_rows === 1) {
        header("location:../register.php");
        $_SESSION['message']= "The account is already registered";
    } else {

        $password = md5($password);
        $query = "INSERT INTO users (username,email,password,phone , admin) VALUES('$username','$email','$password','$phone' ,'0')";
        $mysql->prepare($query)->execute();
        $_SESSION['user'] = $execute->fetch_assoc()["id"]; 
        header("location:../users/index.php");
    }
   
}
