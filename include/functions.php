<?php
include_once ('config.php');
function getUserName($id)
{
//    $mysql = new mysqli('eu-cdbr-west-02.cleardb.net', 'b25b443328ea9b', 'c4a85322', 'heroku_5b872c8f41b5037','3306');
    global $mysql;
    $query = "SELECT username FROM users WHERE id = '$id'";
    $execute = $mysql->query($query);
    $results = $execute->fetch_assoc();

    return $results['username'];
}
function checkbox($id,$value) {
    global $mysql;
    $query="SELECT * FROM form where id='$id' AND Optional LIKE '%$value%'";
    $execute= $mysql->query($query)->num_rows;
    return $execute;
}
function checkbox2($id,$value) {
    global $mysql;
    $query="SELECT * FROM form where id='$id' AND skile LIKE '%$value%'";
    $execute2= $mysql->query($query)->num_rows;
    return $execute2;
}

function checkbox3($id,$value) {
    global $mysql;
    $query="SELECT * FROM form where id='$id' AND Advantages LIKE '%$value%'";
    $execute3= $mysql->query($query)->num_rows;
    return $execute3;
}


function fallcheckbox($name_table,$id) {
//    $mysql=new mysqli('eu-cdbr-west-02.cleardb.net', 'b25b443328ea9b', 'c4a85322', 'heroku_5b872c8f41b5037','3306');
    global $mysql;
    $query="SELECT * FROM '$name_table' where user_id='$id' ";
    $execute=$mysql->query($query)->num_rows;
}

