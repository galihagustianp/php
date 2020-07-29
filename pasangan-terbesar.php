<?php
function pasangan_terbesar($angka){
// kode di sini
	$x=0;
	$y= str_split($angka);

	for ($i = 0; $i < count($y)-1; $i++){
		if ($i == 0) $x = $y[$i] + $y[$i+1];
		if ($x < $y [$i] + $y[$i+1]) $x = $y[$i] + $y[$i+1];
	}
	echo $x;
	echo "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>