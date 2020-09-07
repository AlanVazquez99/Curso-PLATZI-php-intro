<?php
$array = [
    'sudafrica' => ['Cabo', 'Johannesburgo', 'Durban'],
    'Estados Unidos' => ['Austin', 'Boston', 'Chicago'],
    'Tailandia' => ['Bangkok', 'Chiang Mai', 'Chiang Rai'],
    'China' => ['Shanghái', 'Pekín', 'Cantón'],
    'España' => ['Madrid', 'Barcelona', 'Valencia'],
];

foreach ($array as $contry => $cities) {
    echo "\n$contry: ";
    foreach ($cities as $city){
        echo "$city, ";
    }
}