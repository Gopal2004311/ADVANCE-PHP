<?php 
error_reporting(0);
$array=array(
    array("code"=>"101","name"=>"shamachi aai","author"=>"Sane guruji","year"=>"1936","price"=>"250/-"),
    array("code"=>"102","name"=>"Mrutunjay","author"=>"Shivaji savant","year"=>"1967","price"=>"300/-"),
    array("code"=>"103","name"=>"Yayati","author"=>"V.S.Khande","year"=>"1959","price"=>"200/-"),
    array("code"=>"104","name"=>"Shirman yogi","author"=>"Ranjit Desai","year"=>"1968","price"=>"350/-"),
    array("code"=>"105","name"=>"Mahanayak","author"=>"Vishwas patil","year"=>"1998","price"=>"290/-")
);
foreach($array as $first)
{
    echo"-------------------------<br>";
    foreach($first as $key => $value)
    {
        echo"The $key:$value<br>";
    }
}
echo"-------------------------<br>";