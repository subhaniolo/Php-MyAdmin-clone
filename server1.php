<?php
//вывод баз слева
session_start();
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
$sql2 = 'show tables from ' . $_GET['dn'];
print('<div>' . $_GET['dn'] . '</div><hr class=n1><br>');
if ($result = mysqli_query($conn, $sql2)) {
    foreach ($result as $row) {
        print '<div onClick=e(' . chr(39) . $_GET['dn'] . chr(39) . ',' . chr(39) . $row['Tables_in_' . $_GET['dn']] . chr(39) . ',this)>' . $row['Tables_in_' . $_GET['dn']] . '</div><br>';
    }
}
print '<hr class=n1>';
$_SESSION['bd'] = $_GET['dn'];