# PHP - OOP - Ćwiczenia 

## Jak rozwiązywać zadania?

Żeby rozwiązać zadania musisz wykonać następujące kroki:

1. Żeby zacząć, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Następnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
1. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skończysz wszystkie ćwiczenia.


## Ćwiczenia do zrobienia z wykładowcą

### Ćwiczenie 1
Stwórz klasę ```Calculator```. Konstruktor ma nie przyjmować żadnych danych. Każdy nowo stworzony obiekt powinien mieć pustą tablicę w której będzie trzymać historię wywołanych operacji (stwórz ją w konstruktorze).
Nastęnie dodaj do klasy następujące metody:

1. ```add($num1, $num2)``` - metoda ma dodać do siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "added ```num1``` to ```num2``` got ```result```".
2. ```multiply($num1, $num2)``` - metoda ma pomnożyć przez siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "multiplied ```num1``` with ```num2``` got ```result```".  
3. ```subtract($num1, $num2)``` - metoda ma odjąć od siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "subtracted ```num1``` from ```num2``` got ```result```".  
4. ```divide($num1, $num2)``` - metoda ma podzielić przez siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "divided ```num1``` by ```num2``` got ```result```". Pamiętaj, że nie można dzielić przez 0.
5. ```printOperations()``` - metoda ma wypisać wszystkie operacje zapamiętane w pamięci.
6. ```clearoperations()``` - metoda ma wyczyścić wszystkie operacje z pamięci.

Pamiętaj o używaniu ```this```.
Stwórz kilka kalkulatorów i przetestuj ich działanie.

### Ćwiczenie 2
Stwórz klasę ```AdvancedCalculator``` który dziedziczy po klasie ```Calculator```. 
Klasa powinna impementować nastepujące metody:

1. ```pow($num1, $num2)``` - metoda ma zwracać ```num1``` do potęgi ```num2```. Dodatkowo w tablicy operacji ma zapamiętać napis: "```num1```^```num2``` equals ```result```".
2. ```root($num1, $num2)``` - metoda ma wyliczyć pierwiastek ```num2``` stopnia z ```num1```. Dodatkowo w tablicy operacji ma zapamiętać napis: "root ```num2``` of ```num1``` equals ```result```".  

Pamiętaj o nastawieniu atrubytów klasy ```Calculator``` na ```protected```. 

### Ćwiczenie 3
Do klasy ```AdvancedCalculator``` dopisz:

1. Statyczny atrybut ```PI``` który będzie miał przypisaną wartość 3.14
2. Statczyną funkcję ```computeCircleRadius($r)``` która będzie zwracała pole koła. Ta metoda nie będzie dopisywać do tablicy obliczeń (napisz w komentarzu dlaczego nie może tego robić).

## Ćwiczenia samodzielne

### Ćwiczenie 1
Stwórz klasę Wektor. Powinna ona spełniać następujące wymogi:

1. Posiadać dwa prywatne atrybuty: x, y.
2. Posiadać konstruktor przyjmujący dwie zmienne, określające wartości x i y tego wektora. Pamiętaj o sprawdzeniu czy podane zmienne są liczbami (jeżeli nie są to nastaw oba na 0). Konstruktor powinien wypisywać informacje o właśnie stworzonym wektorze.
3. Posiadać destruktor który wypisuje informacje o niszczonym wektorze.
4. Posiadać funkcje umożliwiające zmianę wartości x i y (takie samo założenia jak przy konstruktorze).
5. Posiadać funkcję zwracającą długość.
6. Implementować następujące funkcje: 
  1. Dodawanie przyjmujące jako wartość drugi Wektor, 
  2. Mnożenie skalarne przyjmujące jako wartość liczbę

### Ćwiczenie 2
Stwórz klasę kształt która ma spełniać następujące wymogi:

1. Posiadać prywatne atrybuty: x, y (określające środek tego kształtu) i color.
2. Posiadać konstruktor przyjmujący zmienne, określające wartości x, y i kolor. Pamiętaj o sprawdzeniu czy podane zmienne są liczbami (jeżeli nie są to nastaw oba na 0), a kolor napisem. Konstruktor powinien wypisywać informacje o właśnie stworzonym kształcie.
3. Posiadać destruktor który wypisuje informacje o niszczonym kształcie.
4. Posiadać funkcję wypisującą informacje o tym kształcie.
5. Posiadać funkcję zwracającą odległość od innego kształtu.

Sprawdź co się dzieje kiedy zmieniasz dostęp do poszczególnych funkcji z publicznych na prywatne. Zobacz co z konstruktorem i destruktorem.

### Ćwiczenie 3
Stwórz klasę koło która ma spełniać następujące wymogi:

1. Dziedziczyć po kształcie
2. Mieć dodatkowy atrybut promień
3. Posiadać konstruktor przyjmujący zmienne, określające wartości x, y, kolor i promień. Pamiętaj o sprawdzeniu czy podane zmienne są liczbami (jeżeli nie są to nastaw oba na 0), a kolor napisem. Konstruktor powinien wypisywać informacje o właśnie stworzonym okręgu.
4. Posiadać destruktor który wypisuje informacje o niszczonym okręgu.
5. Posiadać funkcję dostępu (get, set) do promienia,
6. Nadpisywać funkcje kształtu (nadpisz tylko te które tego wymagają).
7. Posiadać funkcję zwracającą pole powierzchni.
8. Posiadać funkcję zwracającą obwód.

### Ćwiczenie 4
Stwórz kasę stożek i walec która mają spełniać następujące wymogi:

1. Dziedziczyć po kole
2. Mieć dodatkowy atrybut wysokość
3. Posiadać konstruktor przyjmujący zmienne, określające wartości x, y, kolor, promień i wysokość. Pamiętaj o sprawdzeniu czy podane zmienne są liczbami (jeżeli nie są to nastaw oba na 0), a kolor napisem. Konstruktor powinien wypisywać informacje o właśnie stworzonym okręgu.
4. Posiadać destruktor który wypisuje informacje o niszczonym okręgu.
5. Posiadać funkcję dostępu (get, set) do wysokości,
6. Nadpisywać funkcje kształtu (nadpisz tylko te które tego wymagają).
7. Posiadać funkcję zwracającą objętość.
8. Obie klasy powinny mieć statyczne zmienne które będą posiadały przykładowy obiekt danej klasy z wszystkimi wielkościami ustawionymi na 1, i kolorem białym.

### Ćwiczenie 5
Napisz obiektowo program, który będzie obsługiwał skanowanie produktów na kasie jak w supermarkecie.

1. Stwórz klasę dla produktów (musi ona zawierać ilość, opis, identyfikator produktu i cenę). Ma mieć funkcję do nastawiania i zwracania odpowiednich swoich atrybutów. Dodatkowo napisz funkcję która wyliczy łączną kwotę za przedmiot (ilość * cena)
2. Napisz klasę Skaner. Skaner musi implementować:
  1. Dodanie produktu (przez przekazanie obiektu produktu).
  2. Usunięcie produktu (poprzez podanie identyfikatora). W przypadku kiedy takiego produktu nie ma jeszcze zeskanowanego ta funkcja ma nic nie robić.
  3. Zmianę ilości produktu (poprzez podanie identyfikatora i nowej liczby). W przypadku kiedy takiego produktu nie ma jeszcze zeskanowanego ta funkcja ma nic nie robić.
  4. Funkcję drukowania paragonu (polega na wyświetleniu na stronie wszyskich produktów,  i łącznej kwoty za wszystkie produkty).
  
  Najepiej jeżeli skaner będzie trzymał tablicę z produktami jako swój atrybut. 
3. Zmodyfikuj klasę produktu w taki sposób żeby wspomagała ona promocję: jeżeli kupisz 3 produkty to cena spada o 20%.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[ref-rand]: http://php.net/manual/pl/function.rand.php
[pull-request]: https://help.github.com/articles/creating-a-pull-request
[ref-multiple-forms]: http://stackoverflow.com/a/14071321
