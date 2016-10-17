<?php

class Book {

    const HARD_COVER = 0;
    const SOFT_COVER = 1;
    const NO_COVER = 2;
    
    public $cover;

}

$book1 = new Book();

$book1->cover = Book::SOFT_COVER;

var_duump($book1);
