<?php
echo "NO.1 : <br><br>"; 
error_reporting(0);
$batas = 5;
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
piramid ($batas, $batas);

echo "===========================================<br>";
echo "NO.2 : <br><br>"; 
function angka($a, $b, $batas){
if ($a <= $batas) {
	if ($b <= $a) {
	echo "$b ";
	$b++;
angka($a, $b, $batas);
        
}else{
	echo "<br>";
	$a++;
angka($a, 1, $batas);
		}
}
}
angka (1, 1, $batas);
 ?>
