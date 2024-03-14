<?php
/*2) Create Class Collge and Class Department as base class and derived class respectively , Create one
more class as Faculty to display it’s detail information.( Use the concept ofinterface)*/

interface College1
{
    public function displayCollege();
}
interface Department1 
{
    public function displayDepartment();
}

interface Faculty1
{
    public function displayFaculty();
}
class College implements College1
{
    public $college_id, $college_name, $college_location;
    public function __construct($college_id, $college_name, $college_location)
    {
        $this->college_id = $college_id;
        $this->college_location = $college_location;
        $this->college_name = $college_name;
    }

    public function displayCollege()
    {
        echo"--------------------------------------------------------<br>";
        echo "College id:" . $this->college_id . "<br>";
        echo "College name:" . $this->college_name . "<br>";
        echo "College location:" . $this->college_location . "<br>";
        echo"--------------------------------------------------------<br>";
    }

}

class Department extends College implements Department1
{
    public $dept_id, $dept_name, $dept_location, $dept_staff;
    public function __construct($college_id, $college_name, $college_location, $dept_id, $dept_name, $dept_location, $dept_staff)
    {
        parent::__construct($college_id, $college_name, $college_location);
        $this->dept_id = $dept_id;
        $this->dept_name = $dept_name;
        $this->dept_location = $dept_location;
        $this->dept_staff = $dept_staff;
    }

    public function displayDepartment()
    {
        echo"--------------------------------------------------------<br>";
        echo "Department id:" . $this->dept_id . "<br>";
        echo "Department name:" . $this->dept_name . "<br>";
        echo "Department location:" . $this->dept_location . "<br>";
        echo "Department staff:" . $this->dept_staff . "<br>";
        echo"--------------------------------------------------------<br>";
    }
}

class Faculty extends Department implements Faculty1
{
    public $faculty_id, $faculty_name;
    public function __construct($faculty_id, $faculty_name, $college_id, $college_name, $college_location, $dept_id, $dept_name, $dept_location, $dept_staff)
    {
        parent::__construct($college_id, $college_name, $college_location, $dept_id, $dept_name, $dept_location, $dept_staff);
        $this->faculty_id = $faculty_id;
        $this->faculty_name = $faculty_name;
    }

    public function displayFaculty()
    {
        echo"--------------------------------------------------------<br>";
        echo "Faculty id:" . $this->faculty_id . "<br>";
        echo "Faculty name:" . $this->faculty_name . "<br>";
        echo"--------------------------------------------------------<br>";
    }
}
$college = new Faculty(101, "commerce", 1001, "C.D.Jain college", "shrirampur", 10001, "BCA", "shrirampur", 10);
$college->displayFaculty();
$college->displayCollege();
$college->displayDepartment();
echo"*****************************************************<br>";
$college1 = new Faculty(102, "science", 1002, "R.B.N.B.college", "shrirampur", 10002, "BSC", "shrirampur", 15);
$college1->displayFaculty();
$college1->displayCollege();
$college1->displayDepartment();
echo"*****************************************************<br>";
$college2 = new Faculty(103, "arts", 1003, "D.Y.patil college", "shrirampur", 10003, "MA", "shrirampur", 20);
$college2->displayFaculty();
$college2->displayCollege();
$college2->displayDepartment();
echo"*****************************************************<br>";
?>