<!-- 1) Create an application that reads “book.xml” file into simple XML object. Display attributes and 
elements (Hint:simple_xml_load_file() function). -->
<?php 
error_reporting(0);
$xml=simplexml_load_file("Q1_book.xml");
$root=$xml->book;

foreach($root as $value)
{
    echo"The book code:$value->code<br>";
    echo"The book code:$value->name<br>";
    echo"The book code:$value->author<br>";
    echo"The book code:$value->year<br>";
    echo"The book code:$value->price<br>";
    echo"-------------------------------------------------<br>";
}

?>