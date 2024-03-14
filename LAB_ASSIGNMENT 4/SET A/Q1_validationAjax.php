<!---1) Write a PHP script using AJAX concept, to check user name and password are valid or 
Invalid (use database to store user name and password).-->
<?php 
error_reporting(0);
$conn=new mysqli("localhost","root","","Advance_php");
$sql=$conn->prepare("SELECT * FROM user WHERE value")

?>