<?php
$server="locahost";
$user_name="root";
$password="";
$dbName="php_intern";
  

$conen=new mysqli($server,$user_name,$password,$dbName);

if ($conen ->connect_error )
 {
    die("Connection_faild".$conen->connect_error);
} 

