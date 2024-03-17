<?php 
error_reporting(0);
$array=array("shamachi aai","mrutunjay","yayati","dnyaneshwari","bhagawat geeta","rich dad poor dad","power of subconcius mind");
if(isset($_GET['book'])&&!empty($_GET['book']))
{
    $book=strtoupper($_GET['book']);
    foreach($array as $value)
    {
        $sub=substr($value,0,strlen($book));
        if(strcmp(strtoupper($sub),$book)==0)
        {
            echo$value.",";
        }
    }
}