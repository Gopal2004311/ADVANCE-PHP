<?php 
/*2) Write PHP program to accept user details such as user-id, name, Address, email, and mobile 
no. Display same information on next page.*/
error_reporting(0);
if(isset($_POST['submit']))
{
    echo"Roll no.:".$_POST['id']."<br>";
    echo"name:".$_POST['name']."<br>";
    echo"address:".$_POST['adr']."<br>";
    echo"email:".$_POST['email']."<br>";
    echo"mobile no.:".$_POST['mobile']."<br>";
}