<?php
//структура
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
$sql2 = "show columns from " . $_GET['tn'];

print ("<i onClick=str()>Структура</i> <i onClick=svas()> Связи</i>");
print "<table border=1><tr>";
$w = '';
$w2 = '';
$w3 = '';
if ($result = mysqli_query($conn, $sql2)) {
    echo ('<th>Field</th>
        <th>Type</th><th>Null</th>
        <th>Операции</th></tr>');
    foreach ($result as $row) {
        echo ('<tr><td>' . $row['Field'] . '</td><td>' . $row['Type'] . '</td><td>' . $row['Null'] . '</td>');
        $w .= $row['Field'] . ';';
        $w2 .= $row['Type'] . ';';
        $w3 .= $row['Null'] . ';';
        echo ('<td onClick=delStr(' . chr(39) . $_GET['dn'] . chr(39) . ',' . chr(39) . $_GET['tn'] . chr(39) . ','. chr(39) . $row['Field'] . chr(39) .')>Delete</td></tr>');
    }
}
