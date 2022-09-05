<?
// процедуры
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}

echo ('<h1>Добавить процедуру из баз осетрова</h1>
Имя процедуры: <input type=text id=q1  placeholder=procedure><br>
Параметры: <div id=w8><span><input type=text placeholder=IN/OUT/INOUT><input type=text placeholder=Имя><input type=text placeholder=Тип><input type=text placeholder=Значение><input type=button value=Удалить onClick=dell(this)></span></div>
<input type=button value=Добавить onclick=add()><br>
Определение: <br><textarea id=e1 rows=10 cols=60 placeholder="BEGIN
тело процедуры;
END"></textarea><br>
Определитель: <br><input type=text id=r1><br><br>
<input type=button onClick=f4() value="Добавить процедуру">
<div id=w9></div></div><br><br>');

$sql = 'SHOW PROCEDURE STATUS';
echo ('<table border=1 align=center>');
if ($result = mysqli_query($conn, $sql)) {
    echo ('<tr><th width=100> Field </th><th> Name </th><th  width=200> Type </th><th width=200>Security type</th></tr>');
    foreach ($result as $row) {
        echo ('<tr><td align=center>' . $row['Db'] . '</td><td>' . $row['Name'] . '</td><td align=center>' . $row['Type'] . '</td><td align=center>' . $row['Security_type'] . '</td></tr>');
    }
    echo ('</table>');
}
