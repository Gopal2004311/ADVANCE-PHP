<?php 

$file=fopen("Q3.txt","r");
$fileData=fread($file,50);
echo $fileData;
// fclose($file);