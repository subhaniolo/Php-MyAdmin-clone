<?
// тригеры
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
//-----------------------------------------------Форма--------------------------------
echo ('<h1>Добавить триггер</h1>
        Имя триггера:
        <input type=text id=v1 placeholder=Trigger><br>
        Таблица:
        <input type=text id=v2 placeholder=Название><br>
        Время:
        <input type=text id=v3 placeholder=BEFORE/AFTER><br>
        Событие:
        <input type=text id=v4 placeholder="INSERT/UPDATE/DELETE"><br>
        Определение:
        <br><textarea id=v5 rows=10 cols=60 placeholder="BEGIN
Тело триггера;
END"></textarea><br>
        Определитель:
        <br><input type=text id=r2><br><br>
        <input type=button onClick=f5() value="Добавить триггер">');
//------------------------------------------------------------------------------------
        