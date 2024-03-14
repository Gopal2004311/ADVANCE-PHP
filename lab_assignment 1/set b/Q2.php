<?php
/*2) Write a PHP program to create a class Employee that contains data members as
Emp_Name, Dept_name , Basic_sal,DA, HRA,TA , IT,PF,PT , GROSS,
DEDUCTION ,NET . It hasmember functions calculate_gross , calculate_deductions ,
Calculate_net_salary . Display pay slip of employee. Create and Initialize members
Emp_Name, Dept_name , Basic_sal of Employee object by using parameterized
constructor*/

class Employee
{
    private $department;
    private $name;
    private $basicSalary;
    private $dearnessAllowance;
    private $hra;
    private $travelingAllowance;
    private $IT;
    private $pf;
    private $pt;
    private $gross;
    private $deduction;
    private $net;

    private function __construct($name, $department, $basicSalary, $dearnessAllowance, $hra, $travelingAllowance, $IT, $pf, $pt, $gross, $deduction, $net)
    {
        $this->name = $name;
        $this->department = $department;
        $this->basicSalary = $basicSalary;
    }

}
