<?php

include("includes/database.php");

$values = [
    'achternaam' => [
        'Bos',
        'Jansen',
        'De Vries',
    ],
    'school' => [
        'Veterstrikdiploma',
        'Basisschool',
        'VMBO',
        'HAVO',
        'VWO/Gymnasium',
        'MBO(Niveau 1 of 2',
        'MBO(Niveau 3 of 4',
        'HBO',
        'WO',
    ],
    'afkomst' => [
        'Nederlands(Blank)',
        'Europeaan(Blank)',
        'Midden-Oosten(Getint)',
        'Noord-Afrika(Getint)',
        'Zuid-Amerika(Latino)',
        'Afrikaans(Donker)',
        'Antillen(Donker)',
        'Aziatisch(Mongoloïde)',
    ],
];
$fields = array_keys($values);

$table = "input_form";
$query = "select * from " . $table;
$results = mysqli_query($connection, $query);
// print "$results\n";

foreach ($results as $result) {
    $fieldToChange = $fields[array_rand($fields)];
    $fieldValues = $values[$fieldToChange];
    $i = array_rand($fieldValues);
    $result[$fieldToChange] = $fieldValues[$i];

    foreach (['achternaam', 'datum', 'geslacht', 'school', 'afkomst'] as $col) {
        $result[$col] = "'". $result[$col] ."'";
    }

    $result['corrupted'] = 1;
    unset($result['id']);

    $keys = implode(', ', array_keys($result));
    $vals = implode(', ', array_values($result));

    $query = 'insert into '.$table.'('.$keys.') values ('.$vals.')';
    mysqli_query($connection, $query);
}
