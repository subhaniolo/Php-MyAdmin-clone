<?
//добавление тригера
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}

$sql = 'CREATE TRIGGER ' . $_GET['l'] . $_GET['v5'];
$result = mysqli_query($conn, $sql);