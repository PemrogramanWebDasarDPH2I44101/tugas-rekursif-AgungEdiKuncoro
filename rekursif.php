<?php
echo "NO.1 : <br><br>"; 
error_reporting(0);

$angka = 5;
function piramid($a, $b){
if ($a >= 1) {
	if ($b >= 1) {
	echo "* ";
	$b--;
piramid($a, $b);

}else{
	echo "<br>";
	$a--;
piramid($a, $a);
	}
}
}
piramid ($angka, $angka);

echo "===========================================<br>";
echo "NO.2 : <br><br>";

function angka($a, $b, $angka){
if ($a <= $angka) {
	if ($b <= $a) {
	echo "$b ";
	$b++;
angka($a, $b, $angka);
        
}else{
	echo "<br>";
	$a++;
angka($a, 1, $angka);
		}
}
}
angka (1, 1, $angka);
 ?>
