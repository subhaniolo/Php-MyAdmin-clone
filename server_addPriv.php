<?php
//добавление привелегий
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}

$sql1 = 'create user ' . $_GET['l1'] . ' @\'localhost\' IDENTIFIED WITH mysql_native_password by ' . chr(39) . $_GET['p1'] . chr(39) . ';';
$sql2 = 'GRANT ' . $_GET['l'] . ' ON ' . $_GET['tn'] . ' TO ' . $_GET['l1'] . ' @\'localhost\'';
$result = mysqli_query($conn, $sql1);
$result1 = mysqli_query($conn, $sql2);
