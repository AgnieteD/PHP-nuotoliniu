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
        'price' => 30000,
    ],
    [
        'brand' => 'Audi',
        'model' => '100',
        'year' => 1990,
        'price' => 3000,
    ],
    [
        'brand' => 'Banana',
        'model' => 'Yellow',
        'year' => 2000,
        'price' => 10000,
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
        'price' => 30000,
    ],
];
?>


<!--   8. Sukurti funkciją kuri spausdina visas mašinas. -->
<style>
.cars-table__title{
  background: #333;
  color: #fff;
  text-align: center;
}
.cars-table__header{
  background: #333;
  color: #fff;
}
.row{
  display: flex;
}
.row > .col {
  width: 25%;
}
.p-1{
  padding: 1rem;
}
.cars-table__body > .row:nth-of-type(2n){
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





<!--   
    10. Sukurti funkciją kuri atrenka mašinas brangesnes, nei parametru paduodama reikšmė.
  Atvaizduoti mašinas lentele panaudojant funkciją, sukurtą 8 punkte.
 -->
<!--   
    11. Sukurti funkciją kuri atrenka mašinas pigesnes, nei parametru paduodama reikšmė.
  Atvaizduoti mašinas lentele panaudojant funkciją, sukurtą 8 punkte.
 -->
<!--   
    12. Sukurti funkciją kuri išrikiuoja mašinas pagal kainą.
  Atvaizduoti mašinas lentele panaudojant funkciją, sukurtą 8 punkte.
 -->
<!--   
    13. Sukurti funkciją kuri išrikiuoja mašinas pagal parametru paduotą funkciją.
  Atvaizduoti mašinas lentele panaudojant funkciją, sukurtą 8 punkte.
 -->