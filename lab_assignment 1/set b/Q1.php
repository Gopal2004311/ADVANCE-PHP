<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Convert inch to feet or feet to inch!!!</h1>
    <form action="#" method="POST">
        <label for="feet"><b>Enter Distance in feet :</b></label>
        <input type="text" name="feet" id="feet"><br>
        <br>
        <label for="inch"><b>Enter Distance in Inches:</b></label>
        <input type="text" name="inch" id="inch"><br>
       <br>
        <input type="radio" name="choice" id="ch" value="1"><b>covert inch to feet!</b><br>
        <br>
        <input type="radio" name="choice" id="ch" value="2"><b>convert feet to inch!!</b><br>
        <br>
        <input type="submit" name="submit" id="submit">
        <input type="reset" name="reset" id="reset">
    </form>
</body>
</html>

<?php
/*1) Create a class named DISTANCE with feet and inches as data members. The classhas
the following member functions: convert_feet_to_inch() , convert_inch_to_feet() .
Display options using radio button and display conversion on nextpage.*/

class Distance
{
    private $feet, $inch;
    private function __construct($feet, $inch)
    {
        $this->feet = $feet;
        $this->inch = $inch;
    }

    public function convertFeetToInch()
    {
        echo $this->feet . " means " . ($this->feet * 12) . " inches";
    }

    public function convertInchToFeet()
    {
        echo $this->inch . " means " . ($this->inch / 12) . " feet";
    }
}

if (isset($_POST['submit'])) {
    $feet = $_POST['feet'];
    $inch = $_POST['inch'];
    $choice = $_POST['choice'];
    $convert = new Distance($feet, $inch);
    switch ($choice) {
        case '1':
            $convert->convertInchToFeet();
            break;
        case '2':
            $convert->convertFeetToInch();
            break;
    }
}
