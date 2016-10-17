<?php

class Employee {

    private $id;
    private $firstName;
    private $lastName;
    private $salary;

    public function __construct($id, $firstName, $lastName, $salary) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setFirstName($newFirstName) {
        $this->firstName = $newFirstName;
        return $this;
    }

    public function setLastName($newLastName) {
        $this->lastName = $newLastName;
        return $this;
    }

    public function setSalary($newSalary) {
        $this->salary = $newSalary;
        return $this;
    }

    public function raiseSalary($percent) {
        if (is_numeric($percent) && $percent >= 0) {
            $this->salary *= 1 + $percent / 100;
        }
    }

}

