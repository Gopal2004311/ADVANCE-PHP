<!--1) Write a simple PHP program which implements Ajax for addition of two numbers.--->
<?php 
    $number1=$_GET['num1'];
    $number2=$_GET['num2'];
    echo"Addition of $number1 and $number2 is".($number1+$number2);