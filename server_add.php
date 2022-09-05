<?php
//добавление
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}

$s = 'insert into ' . $_GET['tn'] . ' values (';
$m1 = explode(';', $_GET['mv']);
for ($i = 0; $i < count($m1) - 1; $i++) {
    if ($i < count($m1) - 2){
    $s .= chr(39) . $m1[$i] . chr(39) . ',';}
    else {
        $s .= chr(39) . $m1[$i] . chr(39) . ')';
    }
}
$result = mysqli_query($conn, $s);