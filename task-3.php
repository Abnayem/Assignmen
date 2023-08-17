<?php

class Employeedata {
    public $name;
    public $id;
    private $salary;

    public function setname($name) {
        $this->name = $name;
    }

    public function getname() {
        return $this->name;
    }

    public function setid($id) {
        $this->id = $id;
    }

    public function getid() {
        return $this->id;
    }

    public function setsalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            echo "don't be salary nagative";
        }
    }

    // public function getsalary() {
    //     return $this->salary;
    // }
}


$employee = new Employeedata();
$employee->setname("John Doe");
$employee->setid(123);
$employee->setsalary(50000);

echo "Employee Name: " . $employee->getname() . "\n";
echo "Employee ID: " . $employee->getid() . "\n";
echo "Employee Salary: $" . $employee->$salary . "\n";

?>
