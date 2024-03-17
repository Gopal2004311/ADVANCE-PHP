<?php 
error_reporting(0);
$bookName=strtoupper($_GET['book']);
$xml=simplexml_load_file("Q3_getFromXmlAjax.xml");
$root=$xml->book;
$flag=0;
foreach($root as $data)
{
    $name=strtoupper($data->title);
    if(strcmp($name,$bookName)==0)
    {
        $flag=1;
        echo"<br>";
        echo"Book Title:".$data->title."<br>";
         echo"Book Author:".$data->author."<br>";
          echo"Book Year:".$data->year."<br>";
           echo"Book Price:".$data->price."<br>";
    }
}

if($flag==0)
{
    echo"No data found!";
}
