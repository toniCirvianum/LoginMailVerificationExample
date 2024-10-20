<?php
define('URL', $_SERVER['REQUEST_URI']);
define('MAIL',"test.daw@cirvianum.cat");
define('CREDENTIAL_MAIL',"lkqnormfhcqektwb");
define('NAME_MAIL',"Toni");
// require_once(__DIR__ . '/Models/Orm.php');
// require_once(__DIR__ . '/Models/Mp.php');
// require_once(__DIR__ . '/Models/Uf.php');
// require_once(__DIR__.'/Models/User.php');


// if (!isset($_SESSION)) {
//     session_start();
// }

// if (!isset($_SESSION['mps'])) {
//     $_SESSION['mps'] = [
//         [
//             'id' => 1,
//             'num_mp' => 'M1',
//             'nom_mp'   => 'Sistemtes Informàtics'
//         ],
//         [
//             'id' => 2,
//             'num_mp' => 'M2',
//             'nom_mp'   => 'Base de dades'
//         ],
//         [
//             'id' => 3,
//             'num_mp' => 'M3',
//             'nom_mp'   => 'Programacio'
//         ]


//     ];
// }

// if (!isset($_SESSION['ufs'])) {
//     $_SESSION['ufs'] = [
//         [
//             'id_uf' => 1,
//             'num_uf' => 'UF1',
//             'nom_uf'   => 'uf qualsevol',
//             'mp_id' => 1
//         ],
//         [
//             'id_uf' => 2,
//             'num_uf' => 'UF2',
//             'nom_uf'   => 'uf qualsevol',
//             'mp_id' => 1
//         ],
//         [
//             'id_uf' => 3,
//             'num_uf' => 'UF1',
//             'nom_uf'   => 'uf qualsevol',
//             'mp_id' => 2
//         ]


//     ];
// }

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [
        [
            'id'=>0,
            'name' => 'Toni F',
            'username'=>'admin',
            'password'=>'123',
            'mail' => "mail@mail.com",
            'admin'=>true,
            'token'=>"",
            'verificat'=> true,
            'img_profile'=>"A.jpg"
        ],
        [
            'id'=>1,
            'name' => 'Raquel F',
            'username'=>'raquel',
            'password'=>'123',
            'mail' => "mail@mail.com",
            'admin'=>false,
            'token'=>"",
            'verificat'=> false,
            'img_profile'=>"C.jpg"
    
        ]
    ];
}


