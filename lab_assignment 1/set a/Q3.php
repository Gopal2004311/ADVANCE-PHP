<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculate the result as per choice!!</h1>
    <form action="<?php

use function PHPSTORM_META\type;

 echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label for="value1"><b>Enter first value:</b></label>
        <input type="number" name="value1" id="v1"><br>
        <br>
        <label for="value2"><b>Enter second value:</b></label>
        <input type="number" name="value2" id="v2"><br>
        <br>
        <label for="choice"><b>Select your choice:</b></label>
        <select name="choice" id="ch">
            <option value="1">Addition</option>
            <option value="2">Subtraction</option>
            <option value="3">Multiplication</option>
            <option value="4">Division</option>
        </select><br>
        <br>
        <input type="submit" name="submit" id="submit">
        <input type="reset" name="reset" id="reset">
    </form>
</body>
</html>
<?php
/*3) Write a Calculator class that can accept two values, then add them, subtract them, multiply them
together, or divide them onrequest.
For example:
$calc = new Calculator(
3, 4 ); echo $calc-
>add(); // Displays “7”
echo $calc- >multiply(); // Displays “12”*/

class Calculator
{
    private $value1, $value2;
    private function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function multiply()
    {
        echo "Multiplication of " . $this->value1 . " and " . $this->value2 . " is " . ($this->value1 * $this->value2) . "<br>";
    }

    public function addition()
    {
        echo "Addition of " . $this->value1 . " and " . $this->value2 . " is " . ($this->value1 + $this->value2) . "<br>";
    }

    public function subtract()
    {
        echo "Subtraction of " . $this->value1 . " and " . $this->value2 . " is " . ($this->value1 - $this->value2) . "<br>";
    }

    public function division()
    {
        echo "Division of " . $this->value1 . " and " . $this->value2 . " is " . ($this->value1 / $this->value2) . "<br>";
    }
}

if (isset($_POST['submit'])) {
    $v1 = $_POST['value1'];
    $v2 = $_POST['value2'];
    $choice=$_POST['choice'];
    $calc = new Calculator($v1, $v2);
    switch ($choice) {
        case '1':
            $calc->addition();
            break;
        case '2':
            $calc->subtract();
            break;
        case '3':
            $calc->multiply();
            break;
        case '4':
            $calc->division();
            break;
    }
}
