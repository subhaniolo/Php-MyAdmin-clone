<?php 
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}
   $genres= $conn->query('show databases');
   while($row=$genres->fetch_assoc()):
  ?>
  <option value="<?php print $row['Database'];?>">
                        <?php print $row['Database'];?>
                </option>
  <?php endwhile; ?>