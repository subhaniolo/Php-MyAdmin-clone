<?php
//sql
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
echo ('<form>
    <textarea class=sel rows="10" cols="45" name="text"></textarea><br>
    <input type=button value=Выполнить onClick=sel('. chr(39) . $db . chr(39) .')>
    </form>');
