<?php
$db = $_GET['dn'];
$ta='';
$tab=$_GET['tn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
$sql='show create table '.$tab;
if ($result = mysqli_query($conn, $sql)) {
    foreach ($result as $row) {
        $ta .= $row['Create Table'];
    }
}
$f = fopen('tab_' . $tab . '.sql', 'w');
fwrite($f, $ta . ";\n");

$ta = "INSERT INTO " . $tab . " (";

$sql1 = 'show columns from ' . $tab;
if ($result = mysqli_query($conn, $sql1)) {
    foreach ($result as $row) {
        $ta .= "`" . $row['Field'] . "`, ";
    }
}

$ta = substr($ta, 0, -2);

$ta .= ") VALUES (";

$sql2 = 'SELECT * FROM  ' . $tab;

$n = 1;
if ($result = mysqli_query($conn, $sql2)) {
    foreach ($result as $row) {
        //print $row[0];
        $sql1 = 'show columns from ' . $tab;
        ////print $sql1;
        $result1 = mysqli_query($conn, $sql1);
        foreach ($result1 as $row1) {
            ////print '<td>' . $row[$row1['Field']] . '</td>';
            $ta .= "'" . $row[$row1['Field']] . "',";
        }
        $ta = substr($ta, 0, -1);
        $ta .= "), (";
    }
}

$ta = substr($ta, 0, -3);
$ta .= ";";
fwrite($f, $ta . "\n");
fclose($f);
