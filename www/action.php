<?php
$role = $_POST['role']; 
$button = $_GET['button'];
$password = $_POST['password'];
$STR = <<<ABC
<form action="action.php" method="post">
 <p>Пароль? <input type="text" name="password" /></p>
 <p><input type="submit" value="Войти" /></p>
</form>
<form><input type="button" value="Отмена" onClick='location.href="http://php1.ru/action.php?button=cancel"'></form>
ABC;
if($button=="cancel") {
	echo "Вход отменен<br>";
} elseif($role == "Админ") {
	echo $STR;
} elseif($role != "Админ" AND $role >0) {
	echo "Я вас не знаю<br>";
	echo $_GET['rty'];
	$flag = 1;
}
if($password=="Черный Властелин"){
		echo "Добро пожаловать!";
} elseif($button!="cancel" AND $role != "Админ" AND $flag==0) {
	echo "Пароль неверен<br>";
}
?> 