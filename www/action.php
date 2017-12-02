<?php
$browser = $_POST['browser']; 
$button = $_GET['button'];
if($button=="cancel") {
	echo "Вход отменен<br>";
} elseif($browser == 'Chrome' OR $browser == 'Firefox' OR $browser == 'Safari' OR $browser == 'Opera') {
	echo "Да, и эти браузеры мы поддерживаем<br>";
} elseif ($browser == 'IE') {
	echo "О, да у вас IE!<br>";
} else {
	echo "Мы надеемся, что и в вашем браузере все ок!<br>";
}
?> 