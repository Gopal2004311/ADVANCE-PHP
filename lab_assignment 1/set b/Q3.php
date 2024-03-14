<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>convert temperature into fahrenheit to celsius and celsius to fahrenheit!!</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label for="celsius"><b>Enter temperature in celsius:</b></label>
        <input type="text" name="celsius" id="celsius"><br>
        <br>
        <label for="fahrenheit"><b>Enter temperature in fahrenheit:</b></label>
        <input type="text" name="fahrenheit" id="fahrenheit"><br>
        <br>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
</body>
</html>

<?php
/*3) Write a PHP program to create a class temperature which contains data members as
Celsius and Fahrenheit . Create and Initialize all values of temperature object by using
parameterized constructor . Convert Celsius to Fahrenheit and Convert Fahrenheit to
Celsius using member functions. Display conversion on next page.*/
// °F = (°C × 9/5) + 32;
//°C = (°F − 32) x 5/9;
class Temperature
{
    public $celsius, $fahrenheit, $result1, $result2;
    public function __construct($celsius, $fahrenheit)
    {
        $this->celsius = $celsius;
        $this->fahrenheit = $fahrenheit;
    }

    public function convertCelsiusToFahrenheit()
    {
        $this->result1 = ($this->celsius * 9 / 5) + 32;
        echo "Temperature in fahrenheit:" . $this->result1 . "<br>";
    }

    public function convertFahrenheitToCelsius()
    {
        $this->result2 = ($this->fahrenheit - 32) * 5 / 9;
        echo "Temperature in celsius:" . $this->result2 . "<br>";
    }
}

if (isset($_POST['submit'])) {
    $celsius = $_POST['celsius'];
    $fahrenheit = $_POST['fahrenheit'];
    $temp = new Temperature($celsius, $fahrenheit);
    $temp->convertCelsiusToFahrenheit();
    $temp->convertFahrenheitToCelsius();
}
?>