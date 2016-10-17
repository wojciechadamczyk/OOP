<?php
class Book {
    static public $numerKatalogowy = 1;
    public $name;
    public $number;
    
    public function __construct($name) {
        $this->name = $name;
        $this->number = self::$numerKatalogowy;
        self::$numerKatalogowy = self::$numerKatalogowy + 15;
    }
}

$book1 = new Book();
$book2 = new Book();
$book3 = clone $book2;

var_dump($book1);
var_dump($book2);
var_dump($book3);

