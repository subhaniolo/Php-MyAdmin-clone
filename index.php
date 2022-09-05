<?php
session_start();
echo ("<meta charset=utf-8><script type='text/javascript' src='script.js'></script>
      <link rel='stylesheet' href='style.css'>");
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}

//------------------------------------------------Проводник------------------------------------------
$sql1 = 'show databases';
echo ('<div class=prov>');
if ($result = mysqli_query($conn, $sql1)) {
    foreach ($result as $row) {
        print '<div onClick=f(' . chr(39) . $row['Database'] . chr(39) . ',this)>' . $row['Database'] . '</div><br>';
    }
}
echo ('</div>');
//---------------------------------------------------------------------------------------------------

//------------------------------------------------Строка стостояния----------------------------------
echo ('<div class=t>Сервер: localhost </div>');
//---------------------------------------------------------------------------------------------------

//------------------------------------------------Таблица обзор, структура и т.д.---------------------------
echo ('
<div class=menu>
    <table width=1116 style="text-align: center">
        <tr>
            <td class=tdb onClick=obe()>Обзор</td>
            <td class=tdb onClick=str()>Структура</td>
            <td class=tdb onClick=sql()>SQL</td>
            <td class=tdb onClick=diz()>Дизайнер</td>
            <td class=tdb onClick=exp()>Экспорт</td>
            <td class=tdb onClick=imp()>Импорт</td>
            <td class=tdb onClick=proс()>Процедуры</td>
            <td class=tdb onClick=trig()>Триггеры</td>
            <td class=tdb onClick=priv()>Привилегии</td>
            <td class=tdb onClick=sv()>Связи</td>
        </tr>
    </table>
</div>');
//-------------------------------------------------------------------------------------------------------

//-------------------------------------------------Вывод таблицы-----------------------------------------
echo ('<div class=output></div>');
//-------------------------------------------------------------------------------------------------------
if ($_POST['submit']) {
    $db = $_SESSION['t1'];
    $conn = mysqli_connect('localhost', 'root', '', $db);
    if (!$conn) {
        die('Not connect!!!');
    }
    $a = file_get_contents($_FILES['uploadfile']['tmp_name']);
    $sql = explode(';', $a);
    for ($i = 0; $i < count($sql) - 1; $i++) {
        $result = mysqli_query($conn, $sql[$i]);
    }
}
