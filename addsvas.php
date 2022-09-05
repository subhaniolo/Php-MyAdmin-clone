<?php
//sql запрос
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
$sql = $_GET['sel'];
"ALTER TABLE `product` ADD FOREIGN KEY (`id_user`) REFERENCES `user`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;"

$result = mysqli_query($conn, $sql);
