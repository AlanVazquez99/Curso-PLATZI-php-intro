<?php
$array = [
	'keyStr1' => 'lado',
	0 => 'ledo',
	'keyStr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'
];

foreach ($array as $item) {
	echo "$item ";
}

echo "\ndecirlo al reves lo dudo \n";

foreach (array_reverse($array) as $item) {
	echo "$item ";
}

echo "\nQue trabajo me ha costado";
