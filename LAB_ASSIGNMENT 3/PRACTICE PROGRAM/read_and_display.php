<!--3) Write a PHP Script to read book.XML and print book details in tabular format using simple 
XML.(Content of book.XML are (book code , book name , author , year ,price)-->
<?php 
$xml=simplexml_load_file("book.xml");
$list=$xml->book;
echo"<h3>The XML data are given below:</h3>";
for($i=0;$i<count($list);$i++)
{
    echo$list[$i]->book_id."<br>";
    echo$list[$i]->book_name."<br>";
    echo$list[$i]->price."<br>";
    echo$list[$i]->year."<br>";
    echo$list[$i]->author."<br>";

}


?>