<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>check whether number is palindrome or not!!</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="num"><b>Enter a number:</b></label>
        <input type="number" name="num" id="num"><br>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
/*1) Write a PHP script to Design a form to accept a number from the user to check whether
number is palindrome or not. (Use the concept of self processing page)*/
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $n = $num;
    $rev = strrev($num);
   /* while ($num > 0) 
    {
        $d = $num % 10;
        $rev = $rev * 10 + $d;
        $num = $num / 10;
        
    }*/

    if ($rev == $n) {
        echo "The number $n is palindrome!!";
    } else {
        echo "The number $n not a palindrome!!";
    }
}
?>