<?php
//sql запрос
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
$sql = $_GET['sel'];
$result = mysqli_query($conn, $sql);
if ($result)
{
    print("+");
}
else
{
    print("-");
}