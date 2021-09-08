<?php
include_once ('../include/config.php');
$_SESSION['message']="";
if(empty($_SESSION['user']))
{
header("location: ../login.php");
}

//print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['name']) && !empty($_POST['name']))
        $name =htmlspecialchars($_POST['name']);
     else
        header("location:../register.php");

    if (isset($_POST['sector']) && !empty($_POST['sector'])){
        $sector =htmlspecialchars($_POST['sector']);
    } else {
        header("location:../register.php");
    }
    if (isset($_POST['value']) && !empty($_POST['value'])) {
        $value =htmlspecialchars($_POST['value']);
    } else {
        header("location:../register.php");
    }
    if (isset($_POST['description']) && !empty($_POST['description'])) {
        $description = htmlspecialchars($_POST['description']);
    } else {
        header("location:../register.php");
    }

    $user_id = $_SESSION['user'];
    $query = "INSERT INTO posts (nameproject,description,sector,value, state, user_id) VALUES ('$name','$description','$sector','$value' ,'Not yet considered ','$user_id')"; 
    // var_dump($query);
    $mysql->query($query);

    header("location:../users/profile.php");
}
