<?php 

error_reporting(0);
$name=$_POST['input'];
echo$name;
$result=array();
$suggestion=array("Rakesh","Rohan","virat","gopal","anand","akshada","bharat","bhagyesh");
for($i=0;$i<count($suggestion);$i++)
{
    if(stristr($name,substr(strtoupper($suggestion[$i]),0,strlen($suggestion[$i]))))
     {
        $result.=$suggestion[$i];
     }
}

print_r($result);