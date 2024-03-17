<?php 
error_reporting(0);
$input=strtoupper($_GET['name']);
$xml=simplexml_load_file("Q1_fetchCourseFromXml.xml");
$data=$xml->course;
foreach($data as $value)
{
    if(strcmp(strtoupper($value->name),$input)==0)
    {
    echo"--------------------------------- <br>";
    echo"Course Code:$value->code<br>";
    echo"Name of Course:$value->name<br>";
    echo"Faculty:$value->faculty<br>";
    echo"Duration:$value->duration<br>";
    echo"Course Fees:$value->fees<br>";

    $subject=$value->subject->list;
     echo"subject:<br>"; 
    foreach($subject as $d)
    {
      echo"$d<br>";
    }
    echo"--------------------------- <br>";
}
}

