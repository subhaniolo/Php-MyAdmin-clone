<?php 
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
   $genres= $conn->query('show tables from ' . $_GET['dn']);
   while($row=$genres->fetch_assoc()):
  ?>
  <option value="<?php print ($row['Tables_in_'.$_GET['dn']])?>">
                        <?php (print $row['Tables_in_'.$_GET['dn']])?>
                </option>
  <?php endwhile; ?>

