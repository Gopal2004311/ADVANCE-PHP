<?php 
error_reporting(0);
$user=$_GET['user'];
$pass=$_GET['pass'];
$conn=new mysqli();
$conn->connect("localhost","root","","Advance_php");
$sql=$conn->prepare("SELECT * FROM user WHERE `username`=? AND `password`=?");
$sql->bind_param("ss",$user,$pass);
$sql->execute();
$res=$sql->get_result();
if($res->num_rows==1)
{
    echo"true";
}else{
    echo"false";
}
