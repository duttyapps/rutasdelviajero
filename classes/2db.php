<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 10/12/2017
 * Time: 15:36
 */
include 'MysqliDb.php';

function send2DB() {
    $db = new MysqliDb('localhost', 'root', 'carlitos', 'rutas');
    $file = 'a.csv';
    $data = file_get_contents($file);
    $data = explode("\n", $data);
    $total = count($data);
    echo "Total Registros: $total\n";
    for ($i=0;$i<$total;$i++) {
        $inf = explode(',', $data[$i]);
        $put_data = Array(
            'IATA' => $inf[0],
            'ICAO' => $inf[1],
            'AEROPUERTO' => utf8_encode($inf[2]),
            'CIUDAD_ENG' => $inf[3],
            'CIUDAD_ESP' => utf8_encode($inf[4]),
            'PAIS_ENG' => $inf[5],
            'PAIS_ESP' => utf8_encode($inf[6]),
            'LONGITUD' => $inf[7],
            'LATITUD' => $inf[8],
            'NOSE' => $inf[9],
            'ALTITUD' => $inf[10]
        );

        $id = $db->insert ('LOCATIONS', $put_data);
        if ($id)
            echo getPercent($total, ($i+1));
        else
            echo 'insert failed: ' . $db->getLastError() . "\n";
    }

    echo "\x07"; //beep
}

function getPercent($total, $cant) {
    return 'Progress: ' . ceil(100 * ($cant / $total)) . "% ($cant/$total)" . "\r";
}

send2DB();