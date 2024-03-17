<!-- 3) Write a PHP Script to read book.XML and print book details in tabular format using simple 
XML.(Content of book.XML are (bookcode , bookname , author , year ,price). -->
<?php 
error_reporting(0);
$xml=simplexml_load_file("Q3_book.xml");
$book=$xml->book;
echo"<table border='1px solid black'>";
echo"<caption>The Book Details!!</caption>";
echo"<tr>
    <th>Code</th>
    <th>Name</th>
    <th>Author</th>
    <th>Year</th>
    <th>Price</th>
</tr>";
foreach($book as $data)
{
    echo"<tr>
    <td>$data->code</td>
    <td>$data->name</td>
    <td>$data->author</td>
    <td>$data->year</td>
    <td>$data->price</td>
    </tr>";
}
echo"</table>";
?>