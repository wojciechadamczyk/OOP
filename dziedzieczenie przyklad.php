<?php

class Book {
    private $name = "rok 1984";
    private $price = 12.50;
    protected $author = "George Orwell";
    
    public function printBookInfo() {
        echo ($this->name . "<br>");
        echo ($this->price . "<br>");
        echo (this->author . "<br>");
    }
}


