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
//neteisingai
$produktai_lentynoje = [
    'lentynos' => 
        1 => 
            [
            'gyvuniniai' => 
                 [
                     'pavadinimas' => 'kiausai',
                     'kiekis' => 3,
                 ],
                 [
                    'pavadinimas' => 'zuvis',
                    'kiekis' => 0,
                ],
            ],
            [ 
            'pieno_produktai' => 
                [
                    'pavadinimas' => 'grietine',
                    'kiekis' => 1,
                ],
                [
                    'pavadinimas' => 'jogurtas',
                    'kiekis' => 2,
                ], 
            ],           
        2 => 
            [
            'pieno_produktai' => 
                [
                    'pavadinimas' => 'pienas',
                    'kiekis' => 1,
                ],
                [
                    'pavadinimas' => 'kefyras',
                    'kiekis' => 0,
                ],
            ],
            [
            'padazai' =>
                 [
                'pavadinimas' => 'kecupas',
                 'kiekis' => 2,
                 ],
            ],
            [
            'alko' =>
                [
                 'pavadinimas' => 'degtine',
                'kiekis' => 2,
                ],
            ],
];

var_dump($produktai_lentynoje);

"<br><br><br>";
//teisingai
$products2 = [
    [
        [
            'name' => 'Kiaušiniai',
            'qty' => 3,
        ],
        [
            'name' => 'Grietinė',
            'qty' => 1,
        ],
        [
            'name' => 'Jogurtas',
            'qty' => 2,
        ],
        [
            'name' => 'Žuvis',
            'qty' => 0,
        ],
    ],
    [
        [
            'name' => 'Pienas',
            'qty' => 1,
        ],
        [
            'name' => 'Kefyras',
            'qty' => 0,
        ],
        [
            'name' => 'Degtinė',
            'qty' => 2,
        ],
        [
            'name' => 'Kečupas',
            'qty' => 2,
        ],
    ],
];
var_dump($products2);

"<br><br><br>";