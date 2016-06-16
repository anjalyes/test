<?php
$size = $argv[1];
$n=array();

for ($i=0; $i < $argv[1]; $i++) { 
	# code...
	array_push($n, $argv[$i+1]);
}

$n = array_unique($n);
sort($n);

foreach ($n as $k) {
	
	echo $k." ";
}

?>

