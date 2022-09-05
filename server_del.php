<?php
//удоление
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
$sql = 'delete from ' .  $_GET['tb'] . ' where ' .  $_GET['m1'] .  '=' . $_GET['row1'];
$result = mysqli_query($conn, $sql);
