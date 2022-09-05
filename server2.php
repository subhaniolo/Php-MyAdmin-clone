<?php
//тоже вывод баз слева
session_start();
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
$sql3 = 'show columns from ' . $_GET['tn'];
print $_GET['tn'] . '<hr class=n2><br><br>';
if ($result = mysqli_query($conn, $sql3)) {
    $i = 0;
    foreach ($result as $row) {
        print $row['Field'] . '<br>';
        $sel[$i] = $row['Field'];
        $i++;
    }
}
echo ('<hr class=n2>');
$_SESSION['tn'] = $_GET['tn'];
?>