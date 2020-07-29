<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
	$angka_sebelumnya=0;
$angka_sekarang=1;
 

for ($i=$arr; $i>=0; $i--)
{
  // hitung angka yang akan ditampilkan
  $output = $angka_sekarang + $angka_sebelumnya;
  
 
  //siapkan angka untuk perhitungan berikutnya
  if($output == $arr){
  echo "true";
  }else{
                echo "false";
            }
}
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>