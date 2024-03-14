<?php
/*1) Write a PHP program to create class circle having radius data member and two member
functions find_circumference () and find_area() . Display area and Circumference
depending on user’s preference.*/
define("PI", "3.14");
class Circle
{
    public $radius, $area, $circum;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function findCircumference()
    {

    }

    public function findArea()
    {
        $this->area = (PI * $this->radius * $this->radius);
    }

    public function displayArea()
    {
        echo "The Area of circle is:" . $this->area . "<br>";
    }
    public function displayCircumference()
    {

    }
}
$circle=new Circle(10);
$circle->findArea();
$circle->displayArea();

?>