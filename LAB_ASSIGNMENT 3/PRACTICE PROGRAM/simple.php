<?php
/*1) Write a XML program which shows how you can easily read and display the contents of an
XML document using SimpleXML.*/

$xml = simplexml_load_file("simple.xml");
echo "----The Xml data----<br>";
foreach ($xml->book as $b1) {
    echo "The book id :" . $b1->bookid . "<br>";
    echo "The book name :" . $b1->bookname . "<br>";
    echo "The book price :" . $b1->bookPrice . "<br>";
}
