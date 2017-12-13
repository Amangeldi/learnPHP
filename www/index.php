<?php
$goods = array("Компуктер","Ноут","Планшет");
$index = count($goods)-1;
echo $goods[$index];
$link = mysql_connect("localhost", "root")
        or die("Не могу соединиться");
    print ("Соединение прошло успешно");
	mysql_select_db('testphp', $link);
	$query = "INSERT INTO lessons (title, body) VALUES (
'Выражаемся по-ПиЭйчПовски',
'Итак, на прошлом уроке я обещал начать урок 3 с изучения следующего, четвертого типа данных...'
)";
mysql_query($query, $link);
$query = "SELECT title, body FROM lessons";
$result = mysql_query($query, $link);
while ($row = mysql_fetch_array($result)) {
    echo "<h1>".$row['title']."</h1><p>";
    echo $row['body']."</p>";
}
    mysql_close($link);
?>