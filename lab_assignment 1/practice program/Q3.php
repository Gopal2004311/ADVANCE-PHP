<?php
//3) Write PHP script to demonstrate the concept of introspection for examining object.
class Owner
{
    public $name, $age, $Qualification;
    public function __construct($name, $age, $Qualification)
    {
        $this->name = $name;
        $this->age = $age;
        $this->Qualification = $Qualification;
    }

    public function displayOwner()
    {
        echo "Owner name:" . $this->name . "<br>";
        echo "Owner age:" . $this->age . "<br>";
        echo "Owner Qualification:" . $this->Qualification . "<br>";
    }
}

class Employee extends Owner
{
    public $nameOfEmployee, $salary, $designation;
    public function __construct($nameOfEmployee, $salary, $designation, $name, $age, $Qualification)
    {
        parent::__construct($name, $age, $Qualification);
        $this->nameOfEmployee = $nameOfEmployee;
        $this->salary = $salary;
        $this->designation = $designation;
    }

    public function displayEmp()
    {
        echo "Employee name:" . $this->nameOfEmployee . "<br>";
        echo "Employee salary:" . $this->salary . "<br>";
        echo "Employee designation:" . $this->designation . "<br>";
    }
}

$emp = new Employee("rakesh", 30000, "manager", "ramesh", 50, "MCA");

if (is_object($emp)) {
    print("Yes! it is a object!!");
} else {
    echo "object not found!!";
}
echo"<br>";
echo"The class of object is:".get_class($emp)."<br>";
echo"The method exist or not:".method_exists($emp,'displayEmp')."<br>";
echo"The get object variables:";
print_r(get_object_vars($emp))."<br>";
?>