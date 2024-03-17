<?php 
error_reporting(0);
$name=strtoupper($_GET['name']);
$xml=simplexml_load_file("Q2_displayPlayerAjax.xml");
$n=$xml->player;
$flag=0;
foreach($n as $value)
{
    $n1=strtoupper($value->name);
    if(strcmp($n1,$name)==0)
    {
        $flag=1;
    echo"<br>";
    echo"Player name:".$value->name."<br>";
    echo"Player Country:".$value->country."<br>";
    echo"Player wickets:".$value->wicket."<br>";
    echo"Player runs:".$value->run."<br>";
    }
}

if($flag==0)
    echo"Record not found!!";