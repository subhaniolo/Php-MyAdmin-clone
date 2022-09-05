<?php
//привелегии
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}

echo ('
    <h1>Добавить учетную запись пользователя</h1>
    Имя пользователя: <input type=text id=l1><br>
    Пароль пользователя: <input type=text id=p1><br>
    ');
//--------------------------------------------------------------------------------------
echo ('
    <form>
    <fieldset>
    <legend>Данные</legend>
    <input type=checkbox value=SELECT>SELECT<br>
    <input type=checkbox value=INSERT>INSERT<br>
    <input type=checkbox value=DELETE>DELETE<br>
    <input type=checkbox value=UPDATE>UPDATE<br>
    <input type=checkbox value=FILE>FILE<br>
    </fieldset>
    </form>
    ');
//--------------------------------------------------------------------------------------
echo ('
    <form>
    <fieldset>
    <legend>Структура</legend>
    <input type=checkbox value=CREATE>CREATE<br>
    <input type=checkbox value=ALTER>ALTER<br>
    <input type=checkbox value=INDEX>INDEX<br>
    <input type=checkbox value=DROP>DROP<br>
    <input type=checkbox value=CREATE TEMPORARY TABLES>CREATE TEMPORARY TABLES<br>
    <input type=checkbox value=SHOW VIEW>SHOW VIEW<br>
    <input type=checkbox value=CREATE ROUTINE>CREATE ROUTINE<br>
    <input type=checkbox value=ALTER ROUTINE>ALTER ROUTINE<br>
    <input type=checkbox value=EXECUTE>EXECUTE<br>
    <input type=checkbox value=CREATE VIEW>CREATE VIEW<br>
    <input type=checkbox value=EVENT>EVENT<br>
    <input type=checkbox value=TRIGGER>TRIGGER<br>
    </fieldset>
    </form>
    <input type=button onClick=addUser() value="Добавить пользователя">
    
    ');
