<?php
// связи
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}

print("<i onClick=str()>Структура</i> <i onClick=svas()> Связи</i>");
print "<table border = 1 class=table><tr>";
$m = '';
$result = ["TABLE_NAME", "COLUMN_NAME", "CONSTRAINT_NAME", "REFERENCED_TABLE_NAME", "REFERENCED_COLUMN_NAME"];

foreach ($result as $row) {
    print('<th>' . $row . '</th>');
    $m .= $row . ';';
}


print '</tr>';
$m1 = explode(';', $m);
$sql1 = 'SELECT 
*
FROM
INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE
TABLE_SCHEMA = "' . $db . '" AND
TABLE_NAME = "' . $_GET['tn'] . '"
';



if ($result1 = mysqli_query($conn, $sql1)) {
    foreach ($result1 as $row1) {
        print '<tr>';
        for ($i = 0; $i < count($m1) - 1; $i++) {
            print '<td>' . $row1[$m1[$i]] . '</td>';
        }
    }
    print '</table>';
}
echo ('<br><table border=1><tr>');
?>


<table border=1 class=table >
    <thead>
        <tr>
            <th>Действия</th>
            <th>Свойства ограничения</th>
            <th>
                Столбец<span class="pma_hint">><span class="hide">Создание внешнего ключа </span></span>
            </th>
            <th colspan="3">
                Ограничение внешнего ключа (INNODB)
            </th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>База данных</th>
            <th>Таблица</th>
            <th>Столбец</th>
        </tr>
    </thead>
    <tbody id = "sss">
<?php include "fogkey.php" ?>

    </tbody>
    <tr>
<th colspan="6">
        <a onclick="addss()"> + Добавить ограничение </a>
</th>
</tr>
</table>


