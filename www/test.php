<?php
$a = 2;
$x = 1 + ($a*=2);
$a = 0;
echo "��������� = ".$x."<br>";
//------
if("0") {
	echo "������<br>";
}
else {
	echo "����<br>";
}
if("ddvdv") {
	echo "������<br>";
}
//-----
echo (null OR 2 OR undefined) . "<br>";
//---
echo (1 AND null AND 2 ) . "<br>";
//---
echo ( null OR 2 AND 3 OR 4 ) . "<br>";
//-----
while($a<3) {
	echo "����� $a!<br>";
	$a++;
}
?>