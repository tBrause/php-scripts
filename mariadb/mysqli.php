<?php
################# connection to the database ###
$mysql_host             = "localhost";
$mysql_user             = "";
$mysql_password         = "";
$mysql_dbname           = "";
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_dbname);

# mysqli charset
mysqli_set_charset($conn, 'utf8');

# mysqli_escape_string
$name = mysqli_escape_string($conn, $name);

# sql
$sql = "SELECT * 
FROM film 
WHERE categorie = 'action' 
ORDER BY categorie";

# result
$result = mysqli_query($conn, $sql);

# count
$count = mysqli_num_rows($result);

# while
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option' . (($film == $row['id']) ? ' selected' : '') . ' value="' . $row['id'] . '">' . $row['Titel'] . '</option>';
}

# mysqli_free_result
mysqli_free_result($result);

# mysqli_close
mysqli_close($conn);

# header - Location
header('Location: index.php?id=' . $id . '');
