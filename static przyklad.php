<?php

class Book {

    static public $numerKatalogowy = 1;
    public $name;
    public $number;

    public function __construct($name) {
        $this->name = $name;
        $this->number = self::$numerKatalogowy;
        self::$numerKatalogowy = self::$numerKatalogowy + 15; // :: Dzialanie na klasie 
    }
    static public function sayHello() {
        self::$numerKatalogowy++;
        print("hello (" . self::$numerKatalogowy . )"<br>")";
    }

}

Book::sayHello();
Book::sayHello();
$book1 = new Book;
Book::sayHello();
//var_dump (Book::$numerKatalogowy);
//$book1 = new Book('Pierwsza ksiazka');
//$book2 = new Book('Druga ksiazka');
//var_dump($book1);
//var_dump($book2);
//var_dump (Book::$numerKatalogowy);