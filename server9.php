<?php
// импорт
session_start();
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
echo ('<form action=index.php method=post enctype=multipart/form-data>
        <input type=file name=uploadfile>
        <input type=submit value=Загрузить name=submit>
        </form>');
$_SESSION['t1'] = $_GET['dn'];
