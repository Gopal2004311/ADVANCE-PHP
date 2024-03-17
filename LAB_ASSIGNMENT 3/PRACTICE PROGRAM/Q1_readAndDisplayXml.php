<!-- 1) Write a XML program which shows how you can easily read and display the contents of an 
XML document using SimpleXML -->

<?php 
error_reporting(0);
$xml=simplexml_load_file("Q1_readAndDisplayXml.xml");
$student=$xml->student;
foreach($student as $data)
{
    echo"<br>";
    echo"The student name:$data->name<br>";
    echo"The student address:$data->address<br>";
    echo"The student faculty:$data->faculty<br>";
    echo"The student mobile:$data->mobile<br>";
    echo"The student learning class:$data->learningClass<br>";
}
?>