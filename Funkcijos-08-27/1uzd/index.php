<!------------------------Funkcijos-------------------------- -->
<?php
$numbers = [-2, 5, 9, 7, 5, 12, 56, 8, 16, 32, -32, -2];
$numbersBinary = [1, 0, 0, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 0];
?>
<!--1. Sukurti funkciją, kuri ima masyvą ir atspausdina kiek- -->
<!--vieną jo reikšmę stulpeliu: [0] => 64.  (nieko negrąžina) -->

<?php

/**
 * Prints all array elements in a column
 * 
 * @param Array $numberArr primitive array 
 */
function printNumbersColumn(array $numberArr)
{
    foreach ($numberArr as $number) : ?>
        <div><?= $number; ?></div>
<?php endforeach;
}

printNumbersColumn($numbers);
printNumbersColumn($numbersBinary);
?>

<hr />
<hr />

<!--1. Sukurti funkciją, kuri ima masyvą ir atspausdina kiek- -->
<!--vieną jo reikšmę eilute, apsklaiusta lauztiniais skliaustais, 
atskyrus kableliu -->

<?php

function printArray(array $arr)
{
?>
    <div>[ <?= join(", ", $arr); ?> ]</div>
<?php
}

printArray($numbers);
printArray($numbersBinary);
?>

<hr />
<hr />

<!--2. Sukurti funkciją, kuri ima masyvą ir grąžina visų -->
<!--jo elementų sumą -->

<?php

function arrSum($arr)
{
    $totalSum = 0;
    foreach ($arr as $val) $totalSum += $val;
    return $totalSum;
}
?>

<div>Nariu suma: <?= arrSum($numbers) ?></div>
<div>Nariu suma: <?= arrSum($numbersBinary) ?></div>

<hr />
<hr />

<!--3. Sukurti funkciją, kuri ima masyvą ir grąžina visų ele- -->
<!--mentų vidurkį -->

<?php

function avg($numberArr)
{
    $totalAvg = 0;
    foreach ($numberArr as $number) {
        $totalAvg += $number / count($numberArr);
    }
    return $totalAvg;
}
?>

<div>Vidurkis: <?= avg($numbers); ?></div>
<div>Vidurkis: <?= avg($numbersBinary); ?></div>

<hr />
<hr />

<!--4. Sukurti funkciją, kuri ima masyvą ir grąžina didžiau- -->
<!--sią skaičių masyve. -->

<?php

function maxArr($arr)
{
    $max = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}
?>

<div>Max: <?= maxArr($numbers); ?></div>
<div>Max: <?= maxArr($numbersBinary); ?></div>

<hr />
<hr />

<!--5. Sukurti funkciją, kuri ima masyvą ir grąžina mažiau- -->
<!--sią skaičių masyve. -->

<?php

function minArr($arr)
{
    $min = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}
?>

<div>Min: <?= minArr($numbers); ?></div>
<div>Min: <?= minArr($numbersBinary); ?></div>

<hr />
<hr />

<!--6. Sukurti funkciją, kuri ima masyvą ir išrikiuoja jo ele- -->
<!--mentus nuo mažiausio iki didžiausio ir grąžina tą masyvą. -->

<?php

function arrSort($arr)
{
    sort($arr);
    return $arr;
}
$numbersSorted = arrSort($numbers);
$numbersSorted2 = arrSort($numbersBinary);


?>

<div>Išrikiuotas: <?php printArray($numbersSorted); ?></div>
<div>Išrikiuotas: <?php printArray($numbersSorted2); ?></div>

<hr />
<hr />

<!--    
    7. Sukurti asociatyvų mašinų masyvą, su savybėmis
  'brand', 'model', 'year', 'price',
 -->

<?php
$cars = [
    [
        'brand' => 'BMW',
        'model' => 'X5',
        'year' => 2015,
        'price' => 35000,
    ],
    [
        'brand' => 'Audi',
        'model' => '100',
        'year' => 1990,
        'price' => 3000,
    ],
    [
        'brand' => 'Banana',
        'model' => 'Yellow1',
        'year' => 2000,
        'price' => 10000,
    ],
    [
        'brand' => 'Banana',
        'model' => 'Yellow3',
        'year' => 4000,
        'price' => 4000,
    ],
    [
        'brand' => 'Banana',
        'model' => 'Yellow2',
        'year' => 8000,
        'price' => 8000,
    ],
    [
        'brand' => 'Honda',
        'model' => 'Shmonda',
        'year' => 1850,
        'price' => 500,
    ],
    [
        'brand' => 'Limonas',
        'model' => 'LTD',
        'year' => 2020,
        'price' => 100000,
    ],
    [
        'brand' => 'Balvonas',
        'model' => '2Lol',
        'year' => 1999,
        'price' => 6000,
    ],
    [
        'brand' => 'Triperis',
        'model' => 'First',
        'year' => 1660,
        'price' => 60000,
    ],
    [
        'brand' => 'BMW',
        'model' => 'X5',
        'year' => 2015,
        'price' => 50000,
    ],
    [
        'brand' => 'BMW',
        'model' => 'X5',
        'year' => 2015,
        'price' => 20000,
    ],
];

$cars2 = [
    [
        'brand' => 'BMW',
        'model' => 'X5',
        'year' => 2015,
        'price' => 35000,
    ],
    [
        'brand' => 'Audi',
        'model' => '100',
        'year' => 1990,
        'price' => 3000,
    ],
    [
        'brand' => 'Banana',
        'model' => 'Yellow1',
        'year' => 2000,
        'price' => 10000,
    ],
    [
        'brand' => 'Banana',
        'model' => 'Yellow3',
        'year' => 4000,
        'price' => 4000,
    ],
    [
        'brand' => 'Banana',
        'model' => 'Yellow2',
        'year' => 8000,
        'price' => 8000,
    ],
    [
        'brand' => 'Honda',
        'model' => 'Shmonda',
        'year' => 1850,
        'price' => 500,
    ],
    [
        'brand' => 'Limonas',
        'model' => 'LTD',
        'year' => 2020,
        'price' => 100000,
    ],
    [
        'brand' => 'Balvonas',
        'model' => '2Lol',
        'year' => 1999,
        'price' => 6000000,
    ],
];
?>


<!--   8. Sukurti funkciją kuri spausdina visas mašinas. -->
<style>
    .cars-table__title {
        background: #333;
        color: #fff;
        text-align: center;
    }

    .cars-table__header {
        background: #333;
        color: #fff;
    }

    .row {
        display: flex;
    }

    .row>.col {
        width: 25%;
    }

    .p-1 {
        padding: 1rem;
    }

    .cars-table__body>.row:nth-of-type(2n) {
        background: #fafafa;
    }
</style>


<?php
function printCarsTable($carArr, $title)
{
?>
    <div class="cars-table">
        <div class="p-1 cars-table__title"><?= $title ?></div>
        <div class="row cars-table__header">
            <div class="col p-1">Markė</div>
            <div class="col p-1">Modelis</div>
            <div class="col p-1">Metai</div>
            <div class="col p-1">Kaina</div>
        </div>
        <div class="cars-table__body">
            <?php foreach ($carArr as $car) : ?>
                <div class="row">
                    <div class="col p-1"><?= $car['brand'] ?></div>
                    <div class="col p-1"><?= $car['model'] ?></div>
                    <div class="col p-1"><?= $car['year'] ?></div>
                    <div class="col p-1"><?= $car['price'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php
}
printCarsTable($cars, 'Visos mašinos');
?>

<!--  9. Sukurti funkciją kuri atrenka visas tik tam tikros markės mašinas.
  Atvaizduoti mašinas lentele panaudojant funkciją, sukurtą 8 punkte.
 -->

<?php

function carsByBrand($cars, $brand)
{
    $filteredCars = [];
    foreach ($cars as $car) {
        if ($car['brand'] === $brand) {
            $filteredCars[] = $car;
        };
    };
    return $filteredCars;
}

$carsMBW = carsByBrand($cars, 'BMW');

printCarsTable($carsMBW, 'Atrūšiuotos BMW mašinos');
?>

<hr />
<hr />

<!--   
    10. Sukurti funkciją kuri atrenka mašinas brangesnes, 
    nei parametru paduodama reikšmė.
  Atvaizduoti mašinas lentele panaudojant funkciją, sukurtą 8 punkte.
 -->

<?php

function filterCarsPriceFrom($cars, $price)
{
    $filteredCars = [];
    foreach ($cars as $car) {
        if ($car['price'] >= $price) {
            $filteredCars[] = $car;
        }
    }
    return $filteredCars;
}

$carsFromPrice30k = filterCarsPriceFrom($cars, 30000);
$carsFromPrice6k = filterCarsPriceFrom($cars, 6000);

printCarsTable($carsFromPrice30k, 'Auto nuo 30k');
printCarsTable($carsFromPrice6k, 'Auto nuo 6k');

?>

<hr />
<hr />
<hr />
<hr />

<!--   
    11. Sukurti funkciją kuri atrenka mašinas pigesnes, nei parametru paduodama reikšmė.
  Atvaizduoti mašinas lentele panaudojant funkciją, sukurtą 8 punkte.
 -->
<?php

function filterCheaperCars($cars, $price)
{
    $filteredCars = [];
    foreach ($cars as $car) {
        if ($car['price'] < $price) {
            $filteredCars[] = $car;
        }
    }
    return $filteredCars;
}

$carsLowerThan50k = filterCheaperCars($cars, 50000);
$carsLowerThan10k = filterCheaperCars($cars, 10000);

printCarsTable($carsLowerThan50k, 'Auto pigiau nei 50k');
printCarsTable($carsLowerThan10k, 'Auto pigiau nei 10k');
?>

<hr />
<hr />
<hr />
<hr />

<!--   
    12. Sukurti funkciją kuri išrikiuoja mašinas pagal kainą.
  Atvaizduoti mašinas lentele panaudojant funkciją, sukurtą 8 punkte.
 -->
<?php
function byPriceASC($curr, $next)
{
    return $curr['price'] - $next['price'];
}
function byPriceDESC($curr, $next)
{
    return $next['price'] - $curr['price'];
}
function sortCarsByPrice($cars)
{
    usort($cars, 'byPriceASC');
    return $cars;
}
$carsSortedByPriceASC = sortCarsByPrice($cars);
printCarsTable($carsSortedByPriceASC, 'Mašinos išrikiuotas pagal kainą didėjimo tvarka');
?>
​
<!--   
    13. Sukurti funkciją kuri išrikiuoja mašinas pagal parametru paduotą funkciją.
  Atvaizduoti mašinas lentele panaudojant funkciją, sukurtą 8 punkte.
 -->
<?php
function byYearASC($curr, $next)
{
    return $curr['year'] - $next['year'];
}
function byYearDESC($curr, $next)
{
    return $next['year'] - $curr['year'];
}
function byBrandASC($curr, $next)
{
    return strcmp($curr['brand'], $next['brand']);
}
function byBrandDESC($curr, $next)
{
    return strcmp($curr['brand'], $next['brand']) * -1;
}
function byModelASC($curr, $next)
{
    return strcmp($curr['model'], $next['model']);
}
function byModelDESC($curr, $next)
{
    return strcmp($curr['model'], $next['model']) * -1;
}
function sortCars($cars, $cmpFunction)
{
    usort($cars, $cmpFunction);
    return $cars;
}
$carsSortedByYearASC = sortCars($cars, 'byYearASC');
$carsSortedByYearDESC = sortCars($cars, 'byYearDESC');
printCarsTable($carsSortedByYearASC, 'Mašinos išrikiuotos pagal metus didėjimo tvarka');
printCarsTable($carsSortedByYearDESC, 'Mašinos išrikiuotos pagal metus mažėjimo tvarka');
?>
​
<hr />
<hr />
<hr />
<hr />

<!--   
    14. Sukurti funkciją kuri atrenka mašinas pagal parametru paduotą funkciją.
  Parašyti panaudojimo pavyzdžių ir atspausdinti mašinas lentele panaudojant funkciją, sukurtą 8 punkte.
 -->
​
<?php
function priceFrom($el, $minPrice)
{
    return $el['price'] >= $minPrice;
}
function priceTo($el, $maxPrice)
{
    return $el['price'] <= $maxPrice;
}
function priceBetween($el, $from, $to)
{
    return $el['price'] >= $from && $el['price'] <= $to;
}
function yearFrom($el, $minYear)
{
    return $el['year'] >= $minYear;
}
function yearTo($el, $maxYear)
{
    return $el['year'] >= $maxYear;
}
function brandEqual($el, $brand)
{
    return $el['brand'] === $brand;
}
function modelEqual($el, $model)
{
    return $el['model'] === $model;
}
/**
 * Atrenka auto naudojant filtravimo funkcija
 * 
 * @param Array $cars auto masyvas.
 * @param Function $filterFunction filtravimo funkcija, kuri grazina true ar false.
 * @param Array $args filtravimo funkcijai perduodami papildomi (šalia tikrinamojo elemento) parametrai.
 * @return Array auto atrinktos pagal filtravimo funkcija.
 * 
 */
function filterCars($cars, $filterFunction, $args)
{
    $filteredCars = [];
    foreach ($cars as $car) {
        if ($filterFunction($car, ...$args)) {
            $filteredCars[] = $car;
        }
    }
    return $filteredCars;
}
$filteredCars = filterCars($cars, 'priceFrom', [5000]);
printCarsTable($filteredCars, 'Auto nuo 5k');
$filteredCars = filterCars($cars, 'priceBetween', [8000, 20000]);
printCarsTable($filteredCars, 'Auto nuo 8k iki 20k');
?>


<hr />
<hr />
<hr />
<hr />
<hr />
<hr />
<hr />
<hr />

<!-- ---------------------------------- KOMPLEKSINĖS UŽDUOTYS ---------------------------------------- -->
<!-- 1. Atrinkti BMW automobilius brangesnius nei 30 000 ir išrikiuokite 
pagal kainą mažėjančia tvarka -->
​
<?php

$filteredCars = filterCars($cars, 'brandEqual', ['BMW']);
$filteredCars = filterCars($filteredCars, 'priceFrom', [30000]);
$filteredCars = sortCars($filteredCars, 'byBrandASC');

printCarsTable($filteredCars, 'BMW nuo 30k mazejancia tvarka');

?>

<hr />
<hr />
<hr />
<hr />

<!--   
    2. Atrinkti Toyota automobilius pigesnius nei 10 000 ir iškikiuokite pagal markę tvarka
 -->
​<?php

    $filteredCars = filterCars($cars, 'brandEqual', ['Banana']);
    $filteredCars = filterCars($filteredCars, 'priceTo', [10000]);
    $filteredCars = sortCars($filteredCars, 'byModelASC');

    printCarsTable($filteredCars, 'Banana iki 10k didejancia tvarka');

?>

<hr />
<hr />
<hr />
<hr />

<!--   
    3. Atrinkti Audi automobilius naujesnius nei 2010 metai, rėžiuose [10000; 50000], išrikiuoti pagal metus didėjančia tvarka
 -->
​
​<?php

    $filteredCars = filterCars($cars, 'brandEqual', ['Audi']);
    $filteredCars = filterCars($filteredCars, 'priceBetween', [10000, 50000]);
    $filteredCars = sortCars($filteredCars, 'byYearASC');

    printCarsTable($filteredCars, 'Audi naujesni nei 2010m');

    ?>

<hr />
<hr />
<hr />
<hr />

<!--   
    4. Parašyti funkciją kuri palygina du mašinų masyvus, pagal suminę mašinų 
    kainą
      grąžinti true - jei pirmojo masyvo kainų suma didenė už antrojo,
      grąžinti false - mei antrojo masyvo kainų suma NEdidenė už antrojo
​
      Atspausdinti ekrane "Pirmojo masyvo mašinų kainų suma yra didesnė" 
        arba  "Antrojo masyvo mašinų kainų suma NĖRA didesnė"
 -->
​
<?php

function carsTotalPrice($cars)
{
    $totalPrice = 0;

    foreach ($cars as $car) {
        $totalPrice += $car['price'];
    }

    return $totalPrice;
}

function compareCarsByTotalPrice($cars, $cars2)
{
    return carsTotalPrice($cars) > carsTotalPrice($cars2);
}

?>

<h3>
    <?= compareCarsByTotalPrice($cars, $cars2)
        ? 'Pirmojo masyvo mašinų kainų suma yra didesnė'
        : 'Antrojo masyvo mašinų kainų suma YRA didesnė'; ?>
</h3>

<hr />
<hr />
<hr />
<hr />

<!--   
    5. Parašyti funkciją kuri palygina du mašinų masyvus, pagal vidutinę mašinų 
    kainą
      grąžinti true - jei pirmojo masyvo kainų vidurkis didesnis už antrojo,
      grąžinti false - jei masyvo kainų vidurkis NĖRA didenis už antrojo
​
      Atspausdinti ekrane "Pirmojo masyvo mašinų kainų vidurkis yra didesnis" 
        arba "Pirmojo masyvo mašinų kainų vidurkis NĖRA didesnis"
-->
<?php

function carsMediumPrice($cars){
    $totalPrice = 0;
    foreach($cars as $car)
    {
        $totalPrice += $car['price'];
    }
    return $totalPrice / count($cars);
};

function compareCarsByMediumPrice($cars, $cars2)
{
    return carsMediumPrice($cars) > carsMediumPrice($cars2);
};

?>
<h3>
    <?= compareCarsByMediumPrice($cars, $cars2)
        ? 'Pirmojo masyvo mašinų kainų vidurkis yra didesnė'
        : 'Antrojo masyvo mašinų kainų vidurkis NĖRA didesnė' ?>
</h3>