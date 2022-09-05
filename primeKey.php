
<?php

$sql1 = 'SELECT 
TABLE_NAME,COLUMN_NAME,CONSTRAINT_NAME, REFERENCED_TABLE_NAME,REFERENCED_COLUMN_NAME
FROM
INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE
TABLE_SCHEMA = "' . $_GET['dn'] . '" AND
TABLE_NAME = "' . $_GET['tn'] . '" 
and CONSTRAINT_NAME = 	"PRIMARY"

';

$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
   $genres= $conn->query($sql1);
   while($row=$genres->fetch_assoc()):
  ?>
  <option value="<?php print ($row['COLUMN_NAME'])?>">
                        <?php print ($row['COLUMN_NAME'])?>
                </option>
  <?php endwhile; ?>