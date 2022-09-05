<?php
//удаление структуры
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
$sql = 'alter table ' .  $_GET['tn'] . ' drop ' . $_GET['tb'] ;
$result = mysqli_query($conn, $sql);