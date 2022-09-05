<?
// дизайнер
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
$sql = 'show tables from ' . $_GET['dn'];
$k = 1;
$l = 3;
$t = 10;

if ($result = mysqli_query($conn, $sql)) {
    foreach ($result as $row) {
        $sql1 = 'show columns from ' . $row['Tables_in_' . $_GET['dn']];
        if ($result1 = mysqli_query($conn, $sql1)) {
            echo '<table id=dizign style="position: none; z-index: 2; left: ' . $l . '%; top:' . $t . '%; border: solid black 2px;
#00CED1;cursor: move;" onClick=dragNdrop(this)><tr><th>' . $row['Tables_in_' . $_GET['dn']] . '</th></tr>';
            foreach ($result1 as $row) {
                print("<tr><td>" . $row['Field'] . ": " . $row['Type'] . "</td></tr>");
            }
        }
        $l = $l + 23;
        if ($l > 93) {
            $t = $l + 40;
            $l = 3;
        }
        print('</table><br>');
    }
}
