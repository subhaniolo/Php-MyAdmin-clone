<?php
$db = $_GET['dn'];
$conn = mysqli_connect('localhost', 'root', '', $db);
if (!$conn) {
    die('Not connect!!!');
}


$sql1 = 'SELECT 
*
FROM
INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE
TABLE_SCHEMA = "' . $_GET['dn'] . '" AND
TABLE_NAME = "' . $_GET['tn'] . '" 
and
NOT CONSTRAINT_NAME = 	"PRIMARY"

';

$genres= $conn->query($sql1);
   while($row=$genres->fetch_assoc()):
    ?>
<tr class="">
    <td>
    </td>
    <td>
        <span class="formelement">
            <input type="text" value="<?php print$row["CONSTRAINT_NAME"]?>" placeholder="Ограничения внешнего ключа" maxlength="64"/>
        </span>
        <div class="floatleft">

            <span class="formelement">
                ON DELETE
                <select>
                    <option value="CASCADE">
                        CASCADE
                    </option>
                    <option value="SET_NULL">
                        SET NULL
                    </option>
                    <option value="NO_ACTION">
                        NO ACTION
                    </option>
                    <option value="RESTRICT" selected="selected">
                        RESTRICT
                    </option>
                </select>
            </span>


            <span class="formelement">
                ON UPDATE<select name="on_update">
                    <option value="CASCADE">
                        CASCADE
                    </option>
                    <option value="SET_NULL">
                        SET NULL
                    </option>
                    <option value="NO_ACTION">
                        NO ACTION
                    </option>
                    <option value="RESTRICT" selected="selected">
                        RESTRICT
                    </option>
                </select>
            </span>


        </div>
    </td>


    <td>
        <span class="formelement clearfloat">
            <select name="Colon" selected = "<?php print $row["COLUMN_NAME"]?>">
                <?php include "Option_col.php" ?>
            </select>
        </span>
    </td>
    <td>
        <span class="formelement clearfloat" >
            <select name="destination_foreign" onchange="option_Col(this)"  selected = "<?php print$row["REFERENCED_TABLE_SCHEMA"]?>" title="База данных">
            <?php include  "bd_option.php"?>
            </select>
        </span>
    </td>
    <td>
        <span class="formelement clearfloat">
            <select name="destination" title="Таблица" onchange="option_colllll(this)" <?php print$row["REFERENCED_TABLE_NAME"]?>>
               
            </select>
        </span>
    </td>
    <td>
        <span class="formelement clearfloat">
            <select name="destination_foreign_column[0][]" title="Столбец" <?php print$row["REFERENCED_COLUMN_NAME"]?>>
                
            </select>
        </span>
    </td>
    
</tr>

<?php endwhile; ?>





ALTER TABLE `jornal` ADD CONSTRAINT `dawd` FOREIGN KEY (`shedule_id`) REFERENCES `shedule`(`shedule_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
ALTER TABLE `journal` ADD CONSTRAINT `dawd` FOREIGN KEY (`shedule_id`) REFERENCES `shedule`(`shedule_id`) ON DELETE RESTRICT ON UPDATE RESTRICT