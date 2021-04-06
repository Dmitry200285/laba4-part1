<?php

$man = [
    "name" => 'Oleg',
    'age' => 19,
    'friends' => [
        'Kostya', 'Vasya', 'Leha'
    ]
];

foreach ($man as $key => $value) {
    if (is_array($value)) {
        $value = implode(', ',$value);
    }
    echo "$key = $value <br>";
}