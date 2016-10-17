<?php

class BankAccount {
    
    private $number;
    private $cash;
    static private $nextAccNumber = 1;
    
    public function __construct() {
        $this->number = self::$nextAccNumber;
        self::$nextAccNumber++;
        $this->cash = 0.0;
    }
    
    public function getNumber() {
        return $this->number;
    }
    
    public function getCash() {
        return $this->cash;
    }

    public function depositCash($amount) {
        if (is_numeric($amount) && $amount > 0) {
            $this->cash += $amount;
        } else {
            return false;
        }
    }
    
    public function withdrawCash($amount) {
        if (is_numeric($amount)){
            if ($amount >= 0) {
                $this->cash -= $amount;
                return $amount;
            } else {
                $amount = $this->cash;
                $this->cash = 0;
                return $amount;
            }        
        } else {
            return false;
        }
    }
    
    public function printInfo() {
        echo "Nr konta: $this->number<br>";
        echo "Stan konta: $this->cash<br>";
    }
    
}

$firstAccount = new BankAccount();
$secoundAccount = new BankAccount();
$thirdAccount = new BankAccount();

$firstaccount->printInfo();
$secoundAccount->printInfo();
$thirdAccount->printInfo();