<?php

    $lapicera1 = array(
        'color' => 'azul',
        'marca' => 'bic',
        'trazo' => 'grueso',
        'precio' => '$10',
    );

    $lapicera2 = array(
        'color' => 'negro',
        'marca' => 'pelikan',
        'trazo' => 'fino',
        'precio' => '$12',
    );

    $lapicera3 = array(
        'color' => 'rojo',
        'marca' => 'faber castell',
        'trazo' => 'grueso',
        'precio' => '$9',
    );

    echo "Lapicera 1:<br>";
    foreach ($lapicera1 as $key)
    {
        echo $key."<br>";
    }

    echo "Lapicera 2:<br>";
    foreach ($lapicera2 as $key)
    {
        echo $key."<br>";
    }

    echo "Lapicera 3:<br>";
    foreach ($lapicera3 as $key)
    {
        echo $key."<br>";
    }
?>