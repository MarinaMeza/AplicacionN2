<!--Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los Arrays de Arrays.-->

<?php

    $i=1;
    //$lapicera = array('color','marca','trazo','precio');
    $arrayLapiceras=array(
        'lapicera 1' => array(
            'color' => 'azul',
            'marca' => 'bic',
            'trazo' => 'grueso',
            'precio' => '$10'
        ),

        'lapicera 2' => array(
            'color' => 'negro',
            'marca' => 'pelikan',
            'trazo' => 'fino',
            'precio' => '$12'
        ),

        'lapicera 3' => array(
            'color' => 'rojo',
            'marca' => 'faber castell',
            'trazo' => 'grueso',
            'precio' => '$9'
        )
    );

    //var_dump($arrayLapiceras);
    /*foreach ($arrayLapiceras as $key => $value) {
        echo $key
    }*/
    foreach ($arrayLapiceras as $key)
    {
        echo "Lapicera ".$i++."<br>";
        foreach ($key as $key)
        {
            echo $key;
            echo "<br>";
        }
    }
?>