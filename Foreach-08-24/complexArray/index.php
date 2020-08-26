<?php

$vilnius = [
    'mayor' => 'Miau Miauskaskinas',
    'address' => 'Katinuku g. 10',
    'number' => '123456.564',
    'area' => 54,
    'elderships' => [
        [
            'title' => 'Vilniaus',
            'elder' => 'Vilius Viliauskas',
            'population' => 600000,
        ],
        [
            'title' => 'Bezdoniu',
            'elder' => 'Bezdzius Bezdauskas',
            'population' => 10000,
        ],
        [
            'title' => 'Urlagano',
            'elder' => 'Pijus Vijurkas',
            'population' => 300000,
        ],
        [
            'title' => 'Urlano',
            'elder' => 'Pijus Virkas',
            'population' => 35000,
        ],
    ],
];


// 3. Atspausdinkite visų seniunijų pavadinimus

foreach ($vilnius['elderships'] as $eldership) {
    print($eldership['title'] . ', ');
}
?>

<!-- 4. Atspaudinkite vienos iš seniunijų duomenis -->
<ul>
    <?php foreach ($vilnius['elderships'][2] as $property) : ?>
        <li><?php print $property; ?></li>
    <?php endforeach; ?>
</ul>
<hr />

<!-- 5. Atspausdinkite visų seniunijų duomenis lentele -->

<table>
    <thead>
        <tr>
            <th>Pavadinimas</th>
            <th>Vadovas</th>
            <th>Gyventoju skaicius</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vilnius['elderships'] as $eldership) : ?>
            <tr>
                <td><?= $eldership['title'] ?></td>
                <td><?= $eldership['elder'] ?></td>
                <td><?= $eldership['population'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<hr />
<hr />

<!-- Antras variantas (ciklas cikle) -->

<?php function printEldershipTable($elderships)
{
?>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>Pavadinimas</th>
                <th>Vadovas</th>
                <th>Gyventoju skaicius</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($elderships as $eldership) : ?>
                <tr>
                    <?php foreach ($eldership as $property) : ?>
                        <td><?= $property ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php
}

printEldershipTable($vilnius['elderships']);
?>

<hr />
<hr />
​
<!-- 6. Atspausdinkite tik tų seniunijų duomenis kur gyventojų kiekis yra iki 20 tūkst. -->
​<?php 
function filterEldershipsByMinPopulation($elderships, $minPop) {
    $newElderships = [];
    foreach ($elderships as $eldership)
        if ($eldership['population'] < $minPop) 
            $newElderships[] = $eldership;
    return $newElderships;
}

$eldershipsWithPopLessThan20k = filterEldershipsByMinPopulation($vilnius['elderships'], 20000);
printEldershipTable($eldershipsWithPopLessThan20k);
?>

<hr />
<hr />

<!-- 7. Atspausdinkite tik tų seniunijų duomenis kur gyventojų kiekis yra virš 50 tūkst. -->
​
​<?php 
function filterEldershipsByMaxPop($elderships, $minPop) {
    $newElderships = [];
    foreach ($elderships as $eldership)
        if ($eldership['population'] > $minPop) 
            $newElderships[] = $eldership;
    return $newElderships;
}

$eldershipsWithMoreThan50k = filterEldershipsByMaxPop($vilnius['elderships'], 50000);
printEldershipTable($eldershipsWithMoreThan50k);
?>

<hr />
<hr />

<!-- 8. Atspausdinkite tik tų seniunijų duomenis
   kur gyventojų kiekis yra nuo 30 iki 40 tūktstančių -->
​
​<?php 
function filterEldershipsBy30To40($elderships, $minPop) {
    $newElderships = [];
    foreach ($elderships as $eldership)
        if ($eldership['population'] < $minPop && $eldership['population'] > 30000) 
            $newElderships[] = $eldership;
    return $newElderships;
}

$elderships30To40k = filterEldershipsBy30To40($vilnius['elderships'], 40000);
printEldershipTable($elderships30To40k);
?>

<hr />
<hr />
<?php

$eldershipsTo40k = filterEldershipsByMinPopulation($vilnius['elderships'], 40000);
$elderships30To40k = filterEldershipsByMaxPop($eldershipsTo40k, 30000);
printEldershipTable($elderships30To40k, 'Bendrijos tarp 30k ir 40k');




// 9. Stulpeliu atspausdinkite kiekvienos seniūnijos gyventojų skaičių


foreach ($vilnius['elderships'] as $eldership) {
    print $eldership['population'] . '<br>';
}

?>
<!-- 10. Stulpeliu atspausdinkite kiekvienos seniūnijos gyventojų skaičių, išrikiavus mažėjimo tvarka -->
​
<?php

$allPopulations = [];
foreach ($vilnius['elderships'] as $eldership){
    $allPopulations[] = $eldership['population'];
}
rsort($allPopulations);
foreach ($allPopulations as $population ): ?>
    <div><?= $population ?></div>
<?php endforeach; ?>

<hr />
<hr />

<!-- 11. Susumuokite visų seniūnijos gyventojų skaičių -->

<?php

$totalPopulation = 0;
foreach ($vilnius['elderships'] as $eldership) {
    $totalPopulation += $eldership['population'];
}
print $totalPopulation;
?>
​
<hr />
<hr />
<!-- 12. Suskaičiuokite vidutinį gyventojų skaičių vienoje seniūnijoje -->
​
<?php

$avg = 0;
foreach ($vilnius['elderships'] as $eldership) {
    $avg += $eldership['population'] / count($vilnius['elderships']);
}

?>

<div><?= $avg; ?></div>


<hr />
<hr />
<!-- 13. Suskaičiuokite vidutinį gyventojų skaičių vienoje seniūnijoje atmetus didžiausią ir mažiausią seniuniją -->
<?php
$allPopulations = [];
foreach ($vilnius['elderships'] as $eldership){
$allPopulations[] = $eldership['population'];
}
rsort($allPopulations);
$mainPopulations = array_slice($allPopulations, 1, count($allPopulations) - 2);
$avgExcept = 0;
foreach ($mainPopulations as $population) {
    $avgExcept += $population / count($mainPopulations);
}
?>
<div><?= $avgExcept?></div>

<hr />
<hr /><hr />
<hr />

<?php



