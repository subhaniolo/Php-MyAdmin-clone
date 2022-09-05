
<?php ?>
    <td>
    </td>
    <td>
        <span class="formelement">
            <input type="text"  placeholder="Ограничения внешнего ключа" maxlength="64">
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
            <select name="Colon">
                <?php include "Option_col.php"?>
            </select>
        </span>
    </td>
    <td>
        <span class="formelement clearfloat" >
            <select name="destination_foreign" onchange="option_Col(this)"  title="База данных">
            <?php include  "bd_option.php"?>
          
            </select>
        </span>
    </td>
    <td>
        <span class="formelement clearfloat">
            <select name="destination" title="Таблица" onchange="option_colllll(this)">
          
            </select>
        </span>
    </td>
    <td>
        <span class="formelement clearfloat">
            <select name="destination_foreign_column[0][]" title="Столбец">
          
            </select>
        </span>
    </td>
    <div onclick="addSvas(this)">Выполнить</div>
