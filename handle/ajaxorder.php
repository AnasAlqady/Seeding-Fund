<?php 
include_once ('../include/config.php');
include_once ('../include/functions.php');

$state = $_GET['stute'];
$id= $_GET['id'];
$idAdmin=$_SESSION['admin'];
$query = "UPDATE posts SET state='$state' WHERE id='$id'";
$execute = $mysql->query($query);
header("location:../admin/profile_users.php?id=$id");