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
//---
$min = 2;
$max = 10;
$flag = true;
for(;$min<=$max;){
	for($i=2;$i <= $min-1; $i++){
		if($min%$i==0) {
			$flag = false;
		}
	}
	if ($flag == true) {
		echo "$min, ";
	}
	$min++;
	$flag=true;
}
echo "<br>";
//---
$STR = <<<ABS
<form action="test.php" method="post">
 <p>������� �����: <input type="text" name="number" /></p>
 <p><input type="submit" value="����" /></p>
</form>
<form><input type="button" value="������" onClick='location.href="http://php1.ru/test.php?button=cancel"'></form>
ABS;
$button = $_GET['button'];
if($button=="cancel") {
	echo "������<br>";
}
$number = $_POST["number"];
do {
	echo $STR; break;
} while ($number<100);
if($number>100) echo "����� ������ 100";
?>