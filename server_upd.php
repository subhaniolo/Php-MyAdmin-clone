<?php
//изменение
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}

$s = 'update ' . $_GET['tn'] . ' set ';
$m = explode(';', $_GET['mf']);
$m1 = explode(';', $_GET['mv']);
for ($i = 0; $i < count($m) - 1; $i++)
    $s .= $m[$i] . "='" . $m1[$i] . "',";
$s = substr($s, 0, -1);
$s .= ' where ' . $_GET['fn'] . '=' . $_GET['va'];
$result = mysqli_query($conn, $s);
