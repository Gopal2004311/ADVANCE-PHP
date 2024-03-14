<?php
/*2) Write a PHP program to create a class Worker that has data members as
Worker_Name, No_of_Days_worked, Pay_Rate. Create and initialize the object
using default constructor, Parameterized constructor. Also write necessary member
function to calculate and display the salary of worker */
class Worker
{
    private $worker_name;
    private $no_of_days;
    private $rate;
    private $total;
    private function __construct($name, $days, $rate)
    {
        $this->worker_name = $name;
        $this->no_of_days = $days;
        $this->rate = $rate;
    }

    public function calculate()
    {
        $this->total = $this->no_of_days * $this->rate;
    }

    public function display()
    {
        echo "Name of worker:" . $this->worker_name . "<br>";
        echo "No.of days are work:" . $this->no_of_days . "<br>";
        echo "Rate of work:" . $this->rate . "<br>";
        echo "Total salary:" . $this->total . "<br>";
    }
}

$worker1 = new Worker("rakesh", 7, 175);
$worker1->calculate();
$worker1->display();