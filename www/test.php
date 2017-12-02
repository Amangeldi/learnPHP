<?php
$a = 2;
$x = 1 + ($a*=2);
$a = 0;
echo "Результат = ".$x."<br>";
//------
if("0") {
	echo "Привет<br>";
}
else {
	echo "Пока<br>";
}
if("ddvdv") {
	echo "Привет<br>";
}
//-----
echo (null OR 2 OR undefined) . "<br>";
//---
echo (1 AND null AND 2 ) . "<br>";
//---
echo ( null OR 2 AND 3 OR 4 ) . "<br>";
//-----
while($a<3) {
	echo "Номер $a!<br>";
	$a++;
}
?>