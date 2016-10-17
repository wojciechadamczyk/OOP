<?php

class Book {

    static private $lastId = 0;
    private $id;
    private $title;
    private $author;
    private $cover;
    private $price;

    const COVER_HARD = 1;
    const COVER_SOFT = 2;

    public function __construct($title, $author, $cover, $increment = true) {
        $this->title = (is_string($title)) ? $title : "Brak tytułu";
        $this->author = (is_string($author)) ? $author : "Brak autora";
        $this->cover = (is_numeric($cover)) ? $cover : 0;
        if ($increment) {
            self::$lastId++;
            $this->id = self::$lastId;
        }
    }

    public function getCoverName() {
        switch ($this->cover) {
            case self::COVER_HARD:
                return "Twarda oprawa";
                break;
            case self::COVER_SOFT:
                return "Miekka oprawa";
                break;
            default:
                return "Brak informacji";
        }
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        if (is_numeric($price) && $price > 0) {
            $this->price = $price;
        }
    }

    public function printInfo() {
        echo "Id: $this->id<br>";
        echo "Tytul: $this->title<br>";
        echo "Autor: $this->author<br>";
        echo "Oprawa: " . $this->getCoverName() . "<br>";
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getCover() {
        return $this->cover;
    }

}

//Klasa Bookshelf jest wykorzystywana tylko w pierwszej wersji zadania
class BookShelf {

    private $booksList;

    public function __construct() {
        $this->booksList = array();
    }

    public function addBook($book) {
        $this->booksList[] = $book;
    }

    public function printList() {
        foreach ($this->booksList as $book) {
            $book->printInfo();
        }
    }

}

//W drugiej wersji tworzymy koszyk, który zawiera w sobie obiekty klasy BookInBasket, dziedziczące po klasie Book
class BookInBasket extends Book {

    public $quantity; //liczba sztuk w koszyku
    public $book; //obiekt ksiązki

    public function __construct($book, $quantity) {
        $this->book = $book;
        $this->quantity = $quantity;
    }

    public function countValue() {
        return $this->book->getPrice() * $this->quantity;
    }

}

class Basket {

    private $booksList;

    public function __construct() {
        $this->booksList = array();
    }

    public function addToBasket($bookToAdd) {
        foreach ($this->booksList as &$bookFromList) {
            if ($bookToAdd->getId() == $bookFromList->book->getId()) {
                $bookFromList->quantity++;
                return true;
            }
        }

        $this->booksList[] = new BookInBasket($bookToAdd, 1);
    }

    public function removeFromBasket($bookToRemove) {
        // DO DOMU
    }

    public function changeQuantity($bookToChangeQuantity, $quantity) {
        // DO DOMU
        
        //ustaw quantity na taką wartość jako podana, jeśli 0 to usuń z koszyka całkowicie
    }

    public function printReceipt() {
        foreach ($this->booksList as $bookInBasket) {
            $bookInBasket->book->printInfo();
            echo "Liczba: $bookInBasket->quantity<br>";
        }
    }

}

$book1 = new Book("Pan Tadeusz", "Adam Mickiewicz", Book::COVER_HARD);
$book2 = new Book("Pan Wolodyjowski", "Henryk sienkiewicz", Book::COVER_HARD);
$book3 = new Book("Przypadek Justyny", "Toamsz Piatek", Book::COVER_SOFT);

$myBookShelf = new BookShelf();
$myBookShelf->addBook($book1);
$myBookShelf->addBook($book2);
$myBookShelf->printList();

$basket = new Basket();
$basket->addToBasket($book1);
$basket->addToBasket($book1);
$basket->addToBasket($book2);
$basket->addToBasket($book3);
echo "<hr>";
$basket->printReceipt();

$basket->removeFromBasket($book1); //DO DOMU
$basket->changeQuantity($book2,5); //DO DOMU