<?php
# INSERT
$sql_insert = "INSERT INTO `dbname` (`name`) VALUES ('" . $name . "')";

# UPDATE
$sql_update = "UPDATE `dbname` SET `name` = '" . $name . "' WHERE id = '" . $id . "'";

# DELETE
$sql_delete = "DELETE FROM `dbname` WHERE `id` = '" . $id . "'";

# SELECT
$sql_selcet = "SELECT * FROM `dbname` WHERE `id` = '1'";
