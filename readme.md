# PHP &ndash; OOP
## Zadania

## Jak rozwiązywać zadania?

Zrób następujące kroki:

1. Żeby zacząć, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
2. Następnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
5. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz egzamin.

**Zadania rozwiązuj w odpowiednich, przygotowanych plikach**.

## Część A &ndash; zadania rozwiązywane z wykładowcą

### Zadanie A1
Stwórz klasę ```Calculator```. Konstruktor ma nie przyjmować żadnych danych. Każdy nowo stworzony obiekt powinien mieć pustą tablicę, w której będzie trzymać historię wywołanych operacji (stwórz ją w konstruktorze).
Następnie dodaj do klasy następujące metody:

1. ```add($num1, $num2)``` &ndash; metoda ma dodać do siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "added ```num1``` to ```num2``` got ```result```".
2. ```multiply($num1, $num2)``` &ndash; metoda ma pomnożyć przez siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "multiplied ```num1``` with ```num2``` got ```result```".  
3. ```subtract($num1, $num2)``` &ndash; metoda ma odjąć od siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "subtracted ```num1``` from ```num2``` got ```result```".
4. ```divide($num1, $num2)``` &ndash; metoda ma podzielić przez siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "divided ```num1``` by ```num2``` got ```result```". Pamiętaj, że nie można dzielić przez zero.
5. ```printOperations()``` &ndash; metoda ma wypisać wszystkie zapamiętane operacje.
6. ```clearOperations()``` &ndash; metoda ma wyczyścić wszystkie zapamiętane operacje.

Pamiętaj o używaniu ```this```.
Stwórz kilka kalkulatorów i przetestuj ich działanie.

### Zadanie A2
Stwórz klasę ```AdvancedCalculator```, która dziedziczy po klasie ```Calculator```.
Klasa powinna implementować następujące metody:

1. ```pow($num1, $num2)``` &ndash; metoda ma zwracać ```num1``` do potęgi ```num2```. Dodatkowo w tablicy operacji ma zapamiętać napis: "```num1```^```num2``` equals ```result```".
2. ```root($num1, $num2)``` &ndash; metoda ma wyliczyć pierwiastek ```num2``` stopnia z ```num1```. Dodatkowo w tablicy operacji ma zapamiętać napis: "root ```num2``` of ```num1``` equals ```result```".  

Pamiętaj o nastawieniu atrybutów klasy ```Calculator``` na ```protected```.

### Zadanie A3
Do klasy ```AdvancedCalculator``` dopisz:

1. Statyczny atrybut ```PI```, który będzie miał przypisaną wartość **3.14**.
2. Statyczną funkcję ```computeCircleRadius($r)``` która będzie zwracała pole koła. Ta metoda nie będzie dopisywać obliczeń do tablicy (napisz w komentarzu, dlaczego nie może tego robić).

## Część B &ndash; zadania rozwiązywane samodzielnie

### Zadanie B1
Stwórz klasę `Wektor`. Powinna ona spełniać następujące wymogi:

1. Mieć dwa prywatne atrybuty: `x`, `y`.
2. Mieć konstruktor przyjmujący dwie zmienne określające wartości `x` i `y` tego wektora. Pamiętaj o sprawdzeniu, czy podane zmienne są liczbami (jeżeli nie są, to nastaw oba na **0**). Konstruktor powinien wypisywać informacje o właśnie stworzonym wektorze.
3. Mieć destruktor wypisujący informacje o niszczonym wektorze.
4. Mieć funkcje umożliwiające zmianę wartości `x` i `y` (takie samo założenia jak przy konstruktorze).
5. Mieć funkcję zwracającą długość.
6. Implementować następujące funkcje:
  * Dodawanie przyjmujące jako wartość drugi `Wektor`.
  * Mnożenie skalarne przyjmujące jako wartość liczbę.

### Zadanie B2
Stwórz klasę `Kształt`, która ma spełniać następujące wymogi:

1. Mieć prywatne atrybuty:
`x`, `y` (określające środek tego kształtu) i `color`.
2. Posiadać konstruktor przyjmujący zmienne określające wartości `x`, `y` i `color`. Konstruktor powinien wypisywać informacje o właśnie stworzonym kształcie. Pamiętaj o sprawdzeniu:
 * czy podane zmienne są liczbami (jeżeli nie są, to nastaw oba na **0**),
 * czy podany kolor jest napisem.
3. Mieć destruktor wypisujący informacje o niszczonym kształcie.
4. Mieć funkcję wypisującą informacje o tym kształcie.
5. Mieć funkcję zwracającą odległość od innego kształtu.

Sprawdź, co się dzieje, kiedy zmieniasz dostęp do poszczególnych funkcji z publicznych na prywatne. Zobacz, co stanie się z konstruktorem i destruktorem.

### Zadanie B3
Stwórz klasę `Koło`, która ma spełniać następujące wymogi:
1. Dziedziczyć po kształcie.
2. Mieć dodatkowy atrybut `promień`.
3. Mieć konstruktor przyjmujący zmienne określające wartości `x`, `y`, `kolor` i `promień`.  Konstruktor powinien wypisywać informacje o właśnie stworzonym okręgu. Pamiętaj o sprawdzeniu:
 * czy podane zmienne są liczbami (jeżeli nie są, to nastaw oba na **0**),
 * czy podany kolor jest napisem.
4. Mieć destruktor, który wypisuje informacje o niszczonym okręgu.
5. Mieć funkcję dostępu (get, set) do promienia.
6. Nadpisywać funkcje kształtu (nadpisz tylko te, które tego wymagają).
7. Mieć funkcję zwracającą pole powierzchni.
8. Mieć funkcję zwracającą obwód.

### Zadanie B4
Stwórz klasy `Stożek` i `Walec`, które mają spełniać następujące wymogi:

1. Dziedziczyć po `Kole`.
2. Mieć dodatkowy atrybut  &ndash; `wysokość`.
3. Mieć konstruktor przyjmujący zmienne określające wartości `x`, `y`, `kolor`, `promień` i `wysokość`. Konstruktor powinien wypisywać informacje o właśnie stworzonym okręgu. Pamiętaj o sprawdzeniu:
 * czy podane zmienne są liczbami (jeżeli nie są, to nastaw oba na **0**),
 * czy podany kolor jest napisem.
4. Mieć destruktor, który wypisuje informacje o niszczonym okręgu.
5. Posiadać funkcję dostępu (get, set) do wysokości,
6. Nadpisywać funkcje kształtu (nadpisz tylko te, które tego wymagają).
7. Mieć funkcję zwracającą objętość.
8. Obie klasy powinny mieć statyczne zmienne, które będą miały przykładowy obiekt danej klasy z wszystkimi wielkościami ustawionymi na **1** i kolorem białym.

### Zadanie B5
Napisz obiektowo program, który będzie obsługiwał skanowanie produktów w sklepie.

1. Stwórz klasę dla produktów (musi ona zawierać ilość, opis, identyfikator produktu i cenę). Program ma mieć funkcję do nastawiania i zwracania odpowiednich swoich atrybutów. Dodatkowo napisz funkcję która wyliczy łączną kwotę za przedmiot (ilość * cena).
2. Napisz klasę `Skaner` implementującą:
  * Dodanie produktu (przez przekazanie obiektu produktu).
  * Usunięcie produktu (przez podanie identyfikatora). Jeśli taki produkt nie był wcześniej zeskanowany, to ta funkcja ma nic nie robić.
  * Zmianę liczby produktu (poprzez podanie identyfikatora i nowej liczby). Jeśli taki produkt nie był wcześniej zeskanowany, to ta funkcja ma nic nie robić.
  * Funkcję drukowania paragonu, która polega na wyświetleniu na stronie wszystkich produktów i łącznej kwoty za wszystkie produkty.

Najlepiej, gdy `Skaner` trzyma tablicę z produktami jako swój atrybut.

3. Zmodyfikuj klasę produktu tak, żeby umożliwiała nadawanie rabatu. Jeżeli kupisz trzy dowolne produkty, to łączna cena spada o 20%.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[ref-rand]: http://php.net/manual/pl/function.rand.php
[pull-request]: https://help.github.com/articles/creating-a-pull-request
[ref-multiple-forms]: http://stackoverflow.com/a/14071321
