<?php

    $car = ['marca' => 'Ford',
            'modelo' => 'mustang',
            'motor' => '5.0 V8'
];

    print_r($car);
    echo "<br>";

    $marca = $car['marca'];
    $modelo = $car['modelo'];
    $motor = $car['motor'];

    echo "O icônico $marca-$modelo possui um belissimo $motor.";