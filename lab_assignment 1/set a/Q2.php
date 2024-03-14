<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Finding Area and volume of a Cylinder!!</h1>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
        <label for="radius"><b>Enter radius of cylinder:</b></label>
        <input type="text" name="radius" id="radius"><br>
        <br>
        <label for="height"><b>Enter height of cylinder:</b></label>
        <input type="text" name="height" id="height"><br>
        <br>
        <input type="submit" name="submit" id="submit">
        <input type="reset" name="reset" id="reset">
    </form>
</body>
</html>

<?php
/*2) Define an interface which has methods area( ), volume( ). Define constant PI. Create a class cylinder
which implements this interface and calculate area and volume. (Hint: Use define())*/
define("PI", "3.14");
//area=2*pi*r*h+2*pi*r*r
//volume=pi*r*r*h
interface Calculate
{
    public function area();
    public function volume();
}

class Cylinder implements Calculate
{
    private $radius, $height, $result1, $result2;
    private function __construct($radius, $height)
    {
        $this->radius = $radius;
        $this->height = $height;
    }

    public function area()
    {
        //2*pi*r*h+2*pi*r*r
        $this->result1 = (2 * PI * $this->radius * $this->height) + (2 * PI * $this->radius * $this->radius);
        echo "Area of cylinder :" . $this->result1 . "<br>";
    }

    public function volume()
    {
        //volume=pi*r*r*h
        $this->result2 = PI * $this->radius * $this->radius * $this->height;
        echo "Volume of cylinder :" . $this->result2 . "<br>";
    }
}

if (isset($_POST['submit'])) {
    $h = $_POST['height'];
    $r = $_POST['radius'];
    $cylinder = new Cylinder($r, $h);
    $cylinder->area();
    $cylinder->volume();
}

?>
