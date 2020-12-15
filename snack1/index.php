<?php

//PHP Snack 1:
//Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
//ogni partita avrà le seguenti caratteristiche:
//squadra di casa
//squadra ospite
//punti fatti dalla squadra di casa
//punti fatti dalla squadra ospite
//L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
//[squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
//ad esempio:
//Olimpia Milano - Cantù | 55 - 60


$matches = [

    [

        'squadra_casa' => 'Virtus Roma',
        'squadra_ospite' => 'VL pesaro',
        'punti_fatti_casa' => '90',
        'punti_fatti_ospite' => '82',

    ],
    [

        'squadra_casa' => 'Vanoli Cremona',
        'squadra_ospite' => 'UNA Hotels Reggio Emilia',
        'punti_fatti_casa' => '95',
        'punti_fatti_ospite' => '103',

    ],
    [

        'squadra_casa' => 'Umana Reyer Venezia',
        'squadra_ospite' => 'Segafredo Virtus Bologna',
        'punti_fatti_casa' => '87',
        'punti_fatti_ospite' => '75',

    ],
    [

        'squadra_casa' => 'Openjobmetis Varese',
        'squadra_ospite' => 'Happy Casa Brindisi',
        'punti_fatti_casa' => '105',
        'punti_fatti_ospite' => '98',

    ],
    [

        'squadra_casa' => 'Germani Basket Brescia',
        'squadra_ospite' => 'A-X Armani Exchange Milano',
        'punti_fatti_casa' => '78',
        'punti_fatti_ospite' => '96',

    ],

];

for ($i=0; $i < count($matches); $i++) {

    var_dump($matches[$i]['squadra_casa'] . '-' . $matches[$i]['squadra_ospite'] . '|' . $matches[$i]['punti_fatti_casa'] . '-' . $matches[$i]['punti_fatti_ospite']);
}

?>
