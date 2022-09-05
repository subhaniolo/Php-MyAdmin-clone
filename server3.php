<?php
//обзор
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
$sql2 = "show columns from " . $_GET['tn'];
//print $sql2;
print "<table border = 1 class=table><tr>";
$m = '';
if ($result = mysqli_query($conn, $sql2)) {
    foreach ($result as $row) {
        print('<th>' . $row['Field'] . '</th>');
        $m .= $row['Field'] . ';';
    }
    print('<th colspan=2>Операции</th>');
}
print '</tr>';
$m1 = explode(';', $m);
$sql1 = 'select * from ' . $_GET['tn'];
if ($result1 = mysqli_query($conn, $sql1)) {
    foreach ($result1 as $row1) {
        print '<tr>';
        for ($i = 0; $i < count($m1) - 1; $i++) {
            print '<td>' . $row1[$m1[$i]] . '</td>';
        }
        print('
        <td onclick=del(' . chr(39) . $_GET['dn'] . chr(39) . ',' . chr(39) . $_GET['tn'] . chr(39) . ',' . chr(39) . $m1[0] . chr(39) . ',' . chr(39) . $row1[$m1[0]] . chr(39) . ',this)>Delete</td>
            <td onClick=upd(this,' . chr(39) . $_GET['tn'] . chr(39) . ',' . chr(39) . $m1[0] . chr(39) . ',' . chr(39) . $row1[$m1[0]] . chr(39) . ',' . chr(39) . $m . chr(39) . ',' . chr(39) . $_GET['dn'] . chr(39) . ')>Update</td>
            </tr>');
    }
    print '</table>';
}
echo ('<br><table border=1><tr>');
if ($result = mysqli_query($conn, $sql2)) {
    foreach ($result as $row) {
        echo ('<td><input type=text></td>');
    }
}
echo ('<td onClick=ad(this)>Add</td></tr></table>');
