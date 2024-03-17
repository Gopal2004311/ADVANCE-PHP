<?php 
error_reporting(0);
$name=$_GET['input'];
$suggestion=array("Rakesh","Rohan","virat","gopal","anand","akshada","bharat","bhagyesh");
if(!empty($name))
{foreach ($suggestion as $value) {
   $up=strtoupper($value);
   $sub=substr($up,0,strlen($name));
   if(strcmp($sub,$name)==0)
   {
      echo$value." ";
   }
}}