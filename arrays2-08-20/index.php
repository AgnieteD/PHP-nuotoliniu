<?php

define('INIT_ARRAY', [7, 2, 8, 4, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 1, 5, 7, 5]);

// 3. Padauginti esamo masyvo narius iš 2

$arrayDouble = [];
for ($i = 0; $i < count(INIT_ARRAY); $i++) {
    $arrayDouble[] = INIT_ARRAY[$i] * 2;
}

var_dump($arrayDouble);


// 4. Pakelti masyvo narius kvadratu

$arrayPower = [];
for ($i = 0; $i < count(INIT_ARRAY); $i++) {
    $arrayDouble[] = INIT_ARRAY[$i] **2;
}



// 5. Padauginti masyvo narius iš jų index'o (vietos masyve)

$arrayPower = [];
for ($i = 0; $i < count(INIT_ARRAY); $i++) { 
    $arrayPower[] = INIT_ARRAY[$i] * $i;
}

var_dump($arrayPower);

// 6. Atrinkti tiktai teigimų elementų masyvą

$arrayPositive = [];
for ($i=0; $i < count(INIT_ARRAY); $i++) { 
    if (INIT_ARRAY[$i] > 0) {
        $arrayPositive[] = INIT_ARRAY[$i];
    } 
 }

var_dump($arrayPositive);

// 7. Atrinkti tiktai neigiamų elementų masyvą

$arrayNegative = [];
for ($i=0; $i < count(INIT_ARRAY); $i++) { 
    if (INIT_ARRAY[$i] < 0) {
        $arrayNegative[] = INIT_ARRAY[$i];
    } 
 }

var_dump($arrayNegative);


// 8. Atrinkti tiktai lyginių skaičių masyvą

$arrayLyginiai = [];
for ($i=0; $i < count(INIT_ARRAY); $i++) { 
    if (gettype(INIT_ARRAY[$i]) === 'integer' && INIT_ARRAY[$i] % 2 === 0) {
        $arrayLyginiai[] = INIT_ARRAY[$i];
    } 
 }

var_dump($arrayLyginiai);


//gettype(INIT_ARRAY[$i]) === 'integer' patikrinam, ar tai yra integeris, kad boolean nerodytu

// 9. Atrinkti tiktai nelyginių skaičių masyvą

$arrayOdd = [];
for ($i=0; $i < count(INIT_ARRAY); $i++) { 
    if (gettype(INIT_ARRAY[$i]) === 'integer' && INIT_ARRAY[$i] % 2 === 1) {
        $arrayOdd[] = INIT_ARRAY[$i];
    } 
 }

var_dump($arrayOdd);

// 11. Visas neigiamas vertes masyve padaryti teigiamomis

$arrayPositive = [];
for ($i=0; $i < count(INIT_ARRAY); $i++) { 
    // if (INIT_ARRAY[$i] < 0) {
    //     $arrayPositive[] = INIT_ARRAY[$i] * -1;
    // } else {
    //     $arrayPositive[] = INIT_ARRAY[$i];
    // }

    //arba
    //$arrayPositive[] = INIT_ARRAY[$i] * (INIT_ARRAY[$i] < 0 ? -1 : 1);
   
    //arba
    $arrayPositive[] = abs(INIT_ARRAY[$i]);
 }

var_dump($arrayPositive);


// 12. Pakelti visas masyvo reikšmes laipsniu 'index'

$arrayPowerIndex = [];
for ($i = 0; $i < count(INIT_ARRAY); $i++) { 
    $arrayPowerIndex[] = INIT_ARRAY[$i] ** $i;
}

var_dump($arrayPowerIndex);


// 13. Atrinkti tik natūralių skaičių masyvą

$arrayNatural = [];
for ($i = 0; $i < count(INIT_ARRAY); $i++) { 
    if (gettype(INIT_ARRAY[$i]) === 'integer' && INIT_ARRAY[$i] > 0)
        $arrayNatural[] = INIT_ARRAY[$i];    
}

var_dump($arrayNatural);

// 14. Suapvalinti visas masyvo reikšmes iki sveikų skaičių

$arrayIntegers = [];
for ($i = 0; $i < count(INIT_ARRAY); $i++) { 
    $arrayIntegers[] = intval(round(INIT_ARRAY[$i]));    
}

var_dump($arrayIntegers);

// 15. Atrinkti kas antrą elementą

$arrayEverySecond = [];
for ($i = 0; $i < count(INIT_ARRAY); $i+=2) { 
    $arrayEverySecond[] = INIT_ARRAY[$i];    
}

var_dump($arrayEverySecond);

// 15. Atrinkti kas penktą elementą

$arrayEveryFifth = [];
for ($i = 0; $i < count(INIT_ARRAY); $i+=5) { 
    $arrayEveryFifth[] = INIT_ARRAY[$i];    
}

var_dump($arrayEveryFifth);

//arba

$arrayEveryFifth = [];
for ($i = 0; $i < count(INIT_ARRAY); $i++) { 
    if ($i % 5 === 0) {
        $arrayEveryFifth[] = INIT_ARRAY[$i]; 
    }
}

var_dump($arrayEveryFifth);





