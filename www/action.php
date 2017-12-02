<?php
$a = $_POST['a']; 
$button = $_GET['button'];
if($button=="cancel") {
	echo "Вход отменен<br>";
} 
switch($a) {
	case(0): echo 0; break;
	case(1): echo 1; break;
	case(2):
	case(3): echo "2,3"; break;
}
?> 