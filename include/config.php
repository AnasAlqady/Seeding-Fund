<?php
session_start();


//echo "testq";
$mysql = new mysqli('localhost','root','','infograph');
global $mysql;
//$mysql = new mysqli('gator4169','anasalqa_616d_cg','ans0172890','anasalqa_hemmeh');
$mysql->set_charset('utf8');
//$mysql = new mysqli('eu-cdbr-west-02.cleardb.net','b25b443328ea9b','c4a85322','heroku_5b872c8f41b5037','3306');
//$mysql->set_charset('utf8');


