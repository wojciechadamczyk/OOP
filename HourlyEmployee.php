<?php
require ('Employee.php');

class HourlyEmployee extends Employee {
    public function computePayment($hours) {
        if(is_numeric($hours) && $hours > 0) {
            return $hours * $this->getSalary();
        }
    }
}

$john = New HourlyEmployee(5, "John", "blabla", 50);
echo $john->computePayment(8);

