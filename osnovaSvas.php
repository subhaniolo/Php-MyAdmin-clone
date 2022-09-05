<?php
$_GET["CONSTRAINT_NAME"];
$table_colonOp = $_GET["table_colonOp"];
?>
<tr>
    <td>
    </td>
    <td>
        <span class="formelement clearfloat">
            <input type="text" value="''" placeholder="Ограничения внешнего ключа" maxlength="64">
        </span>
<div class="floatleft">
                                        <span class="formelement">
        ON DELETE
        <select name="on_delete[' . $table_colonOp . ']">
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
        ON UPDATE<select name="on_update[' . $table_colonOp . ']">
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
        <select name="">
<option value="" selected="selected">

</option>
<option value="acces">
acces
</option>
<option value="description">
description
</option>
<option value="id">
id
</option>
<option value="name">
name
</option>
<option value="quantity">
quantity
</option>
</select>
    </span>
        <a class="formelement clearfloat add_foreign_key_field" data-index="0" href="">
    + Добавить столбец        </a>
</td>
                <td>
<span class="formelement clearfloat">
    <select name="destination_foreign_db[0]" title="База данных">
<option value=""></option>
        <option value="airflot">
    airflot
</option>
    <option value="animals">
    animals
</option>
    <option value="arenda" selected="selected">
    arenda
</option>
    <option value="army">
    army
</option>
    <option value="fish_agency">
    fish_agency
</option>
    <option value="information_schema">
    information_schema
</option>
    <option value="jornal">
    jornal
</option>
    <option value="mysql">
    mysql
</option>
    <option value="newnew">
    newnew
</option>
    <option value="performance_schema">
    performance_schema
</option>
    <option value="shop">
    shop
</option>
    <option value="site">
    site
</option>
    <option value="ski">
    ski
</option>
    <option value="softbd">
    softbd
</option>
    <option value="sub">
    sub
</option>
    <option value="sys">
    sys
</option>
    <option value="trevel">
    trevel
</option>
    <option value="turist">
    turist
</option>
</select>
</span>
</td>
<td>
<span class="formelement clearfloat">
    <select name="destination_foreign_table[0]" title="Таблица">
<option value=""></option>
        <option value="categoru">
    categoru
</option>
    <option value="comment">
    comment
</option>
    <option value="contract">
    contract
</option>
    <option value="favorites">
    favorites
</option>
    <option value="parameters">
    parameters
</option>
    <option value="product">
    product
</option>
    <option value="product_category">
    product_category
</option>
    <option value="user">
    user
</option>
    <option value="wishlist">
    wishlist
</option>
</select>
</span>
</td>
<td>
            <span class="formelement clearfloat">
        <select name="destination_foreign_column[0][]" title="Столбец">
<option value=""></option>
    </select>
    </span>
    </td>
</tr>
                        <tr>
            <th colspan="6">
                <a class="formelement clearfloat add_foreign_key" href="">
                    + Добавить ограничение                        </a>
            </th>
        </tr>

        