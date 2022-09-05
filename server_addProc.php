<?
//добавление процедуры
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}

$sql = 'CREATE PROCEDURE ' . $_GET['b'] . ' ' . $_GET['l'] . $_GET['c'];
print $sql;
$result = mysqli_query($conn, $sql);
