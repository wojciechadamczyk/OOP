<?php
require ('Employee.php');

class SalariedEmployee extends Employee {
    public function computePayment() {
        return $this->getSalary() * 190;
    } 
}

$john = New SalariedEmployee(5, "john", "blabla", 50);
echo $john->computePayment();