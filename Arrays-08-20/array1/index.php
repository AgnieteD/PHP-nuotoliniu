<?php
$maistas = ['kiaušinis', 'baklažanas', 'obuolys'];
var_dump ($maistas);


"<br><br><br>";
//neteisingai
$maistas2 = [
    0 => 'mazas_baklazanas',
    1 => 'didele_grietine',
    2 => ['kiausas1', 'kiausas2'],
];
var_dump ($maistas2);

"<br><br><br>";
//neteisingai
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

"<br><br><br>";
//neteisingai
$games = [

   'mystery' => [
        'author' => 'Petro Pizdžio',
        'title' => 'prap*stas telefonas',
    ],
    'culinary' => [
        'author' => 'Tomo Ablomo',
        'title' => 'naudojamas buljonas',
    ],
    'shit-core' => [
        'author' => 'Anos Shitkovos',
        'title' => 'pasibaigęs rulonas',
    ],
];

var_dump($games);

"<br><br><br>";
//neteisingai
$items = [
    [
        'owner_name' => 'Petro',
        'owner_surname' => 'Pizdžio',
        'status' => 'prap*stas',
        'object' => 'telefonas',
    ], 
    [
        'owner_name' => 'Tomo',
        'owner_surname' => 'Ablomo',
        'status' => 'naudojamas',
        'object' => 'buljonas',
    ], 
    [
        'owner_name' => 'Anos',
        'owner_surname' => 'Shitkovos',
        'status' => 'pasibaigęs',
        'object' => 'rulonas',
    ], 
];

var_dump($items);

"<br><br><br>";
//teisingai
define('ITEM_LOST', 0);
define('ITEM_IN_USE', 1);
define('ITEM_EMPTY', 2);
$players = [
    [
        'name' => [
            'Petras',
            'Pizdys'
        ],
        'items' => [
            [
                'name' => 'Telefonas',
                'status' => ITEM_LOST
            ]
        ]
    ],
    [
        'name' => [
            'Tomas',
            'Ablomas'
        ],
        'items' => [
            [
                'name' => 'Buljonas',
                'status' => ITEM_IN_USE
            ]
        ]
    ],
    [
        'name' => [
            'Ana',
            'Shitkova'
        ],
        'items' => [
            [
                'name' => 'Rulonas',
                'status' => ITEM_EMPTY
            ]
        ]
    ]
];
var_dump($players);

"<br><br><br>";