<?php
$maistas = ['kiaušinis', 'baklažanas', 'obuolys'];
var_dump ($maistas);


"<br><br><br>";

$maistas2 = [
    0 => 'mazas_baklazanas',
    1 => 'didele_grietine',
    2 => ['kiausas1', 'kiausas2'],
];
var_dump ($maistas2);

"<br><br><br>";

$products = [
    'size' => [
        'small' => [
            'baklazanas' => '1vnt',
        ],
        'big' => [
            'grietine' => '1vnt',
            'kiausai' => '2vnt',
        ],
    ],
];

var_dump ($products);

"<br><br><br>";

$produktai_teisingai = [
    [
        'pavadinimas' => 'Grietinė',
        'dydis' => 'big',
        'kiekis' => 1
    ],
    [
        'pavadinimas' => 'Baklažanas',
        'dydis' => 'small',
        'kiekis' => 1
    ],
    [
        'pavadinimas' => 'Kiaušinis',
        'dydis' => 'big',
        'kiekis' => 2
    ],
];
var_dump($produktai_teisingai);