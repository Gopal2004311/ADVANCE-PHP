<?php 
error_reporting(0);
$name=$_GET['name'];
if(empty($name))
{
    echo"user cannot be empty..!";
    
}else if(strlen($name)<4)
{
    echo"username length too short..!";
    
}else if(!preg_match("/^[a-zA-Z\s]+$/",$name))
{
    echo"invalid username..!";
}else{
    echo"valid username!";
}
