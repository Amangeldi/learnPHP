<?php
$a = $_POST['a']; 
if($a<0) {
	echo "Минус<br>";
} elseif ($a>0) {
	echo "Плюс<br>";
} else {
	echo "Ноль<br>";
}
?> 