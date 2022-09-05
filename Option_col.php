<?php 
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
   $genres= $conn->query('show columns from ' . $_GET['tn']);
   while($row=$genres->fetch_assoc()):
  ?>
  <option value="<?php print $row['Field'];?>">
                        <?php print $row['Field'];?>
                </option>
  <?php endwhile; ?>