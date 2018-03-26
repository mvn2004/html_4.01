<?php
/*
echo $_POST['name'];
echo $_POST['password'];
echo $_POST['sleep'];
*/
$result = mail("mvn2004@mail.ru","Анкета","С сайта была получена анкета с такими данными: \nИмя: $_POST[name] \nПароль: $_POST[password] \nЛюбите ли экономить время: $_POST[time] \nСколько часов в день спит: $_POST[sleep] часов \nСвои наработки в экономии времени: $_POST[text]");

if ($result) {
echo "<p>Сообщение отправлено успешно!</p>";
}
else {
echo "<p>Сообщение НЕ отправлено!</p>";
}
?>