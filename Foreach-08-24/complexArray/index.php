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
    ],  
];


// 3. Atspausdinkite visų seniunijų pavadinimus

foreach ($vilnius['elderships'] as $value) {
    print ($value['title'] . ', ');
}


// 4. Atspaudinkite vienos iš seniunijų duomenis



?>

<!-- 5. Atspausdinkite visų seniunijų duomenis lentele -->
​
<!-- 6. Atspausdinkite tik tų seniunijų duomenis kur gyventojų kiekis yra iki 20 tūkst. -->
​
<!-- 7. Atspausdinkite tik tų seniunijų duomenis kur gyventojų kiekis yra virš 50 tūkst. -->
​
<!-- 8. Atspausdinkite tik tų seniunijų duomenis
   kur gyventojų kiekis yra nuo 30 iki 40 tūktstančių -->
​
<!-- 9. Stulpeliu atspausdinkite kiekvienos seniūnijos gyventojų skaičių -->
​
<!-- 10. Stulpeliu atspausdinkite kiekvienos seniūnijos gyventojų skaičių, išrikiavus mažėjimo tvarka -->
​
<!-- 11. Susumuokite visų seniūnijos gyventojų skaičių -->
​
<!-- 12. Suskaičiuokite vidutinį gyventojų skaičių vienoje seniūnijoje -->
​
