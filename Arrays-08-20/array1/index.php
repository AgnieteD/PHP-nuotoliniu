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
// $produktai_lentynoje = [
//     'lentynos' => 
//         1 => 
//             [
//             'gyvuniniai' => 
//                  [
//                      'pavadinimas' => 'kiausai',
//                      'kiekis' => 3,
//                  ],
//                  [
//                     'pavadinimas' => 'zuvis',
//                     'kiekis' => 0,
//                 ],
//             ],
//             [ 
//             'pieno_produktai' => 
//                 [
//                     'pavadinimas' => 'grietine',
//                     'kiekis' => 1,
//                 ],
//                 [
//                     'pavadinimas' => 'jogurtas',
//                     'kiekis' => 2,
//                 ], 
//             ],           
//         2 => 
//             [
//             'pieno_produktai' => 
//                 [
//                     'pavadinimas' => 'pienas',
//                     'kiekis' => 1,
//                 ],
//                 [
//                     'pavadinimas' => 'kefyras',
//                     'kiekis' => 0,
//                 ],
//             ],
//             [
//             'padazai' =>
//                  [
//                 'pavadinimas' => 'kecupas',
//                  'kiekis' => 2,
//                  ],
//             ],
//             [
//             'alko' =>
//                 [
//                  'pavadinimas' => 'degtine',
//                 'kiekis' => 2,
//                 ],
//             ],
// ];

// var_dump($produktai_lentynoje);

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
//neteisingai
$takeliai = [
    [
        'track_number' => 1,
        'status' => 'open',
        'tidiness' => 'clean',
        'max_kegs' => 10,
        'kegs_shot_on_track' => 5,
        'kegs_standing' => 
        [
            'position-1' => true,
            'position-2' => false,
            'position-3' => false,
            'position-4' => true,
            'position-5' => false,
            'position-6' => false,
            'position-7' => true,
            'position-8' => false,
            'position-9' => true,
            'position-10' => true,
        ],
    ],
    [
        'track_number' => 2,
        'status' => 'closed',
        'tidiness' => 'filthy',
        'max_kegs' => 10,
        'kegs_shot' => false,
        'kegs_standing' => false,
    ],
];

var_dump($takeliai);

"<br><br><br>";
//teisingai

$bowling = [
    [
        'enabled' => true,
        'pins' => [
            [1, 0, 0, 1],
            [0, 0, 1],
            [0, 1],
            [1],
        ]
    ],
    [
        'enabled' => false,
        'pins' => [
            [0, 0, 0, 0],
            [0, 0, 0],
            [0, 0],
            [0],
        ]
    ]
];
var_dump($bowling);


//dar vienas teisingas

define('STATUS_CLOSED', 0);   // Closed, working fine
define('STATUS_OPEN', 1);     // Open for play
define('STATUS_BROKEN', 2);   // Closed with a reason
define('PROBLEM_PRIORITY_LOW', 0);    // Need planing
define('PROBLEM_PRIORITY_MID', 1);    // Period 30 days
define('PROBLEM_PRIORITY_HIGH', 2);   // Period 1 week
define('PROBLEM_PRIORITY_URGENT', 3); // Today (ASAP)
$bowling2 = [
    [
        'status' => STATUS_OPEN,
        'pins' => [
            [true, false, false, true],
            [false, false, true],
            [false, true],
            [true]
        ],
        'problems' => [
            [
                'message' => 'Missing one of the chairs by the table',
                'priority' => PROBLEM_PRIORITY_MID
            ]
        ]
    ],
    [
        'status' => STATUS_BROKEN,
        'pins' => [
            [false, false, false, false],
            [false, false, false],
            [false, false],
            [false]
        ],
        'problems' => [
            [
                'message' => 'Client pissed the floor all over, need to clean it before opening',
                'priority' => PROBLEM_PRIORITY_URGENT
            ],
            [
                'message' => 'Some of the bowls are old',
                'priority' => PROBLEM_PRIORITY_LOW
            ]
        ]
    ]
];
var_dump($bowling2);

//dar nuimt reik direction ir i viena sumest
$track = [
    [
        'turn_direction' => 'right',
        'turn_degree' => 90,
    ],
    [
        'turn_direction' => 'left',
        'turn_degree' => -30,
    ],
    [
        'turn_direction' => 'right',        
        'turn_degree' => 40,
    ],
    [
        'turn_direction' => 'left',       
        'turn_degree' => 160,
    ],
    [
        'turn_direction' => 'right',      
        'turn_degree' => -70,
    ],
    [
        'turn_direction' => 'right', 
        'turn_degree' => 180,
    ],
    [
        'turn_direction' => 'right', 
        'turn_degree' => 15,
    ],
];

var_dump($track);