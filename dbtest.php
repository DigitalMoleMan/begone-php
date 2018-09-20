<?php
    include 'db.php';
    $statement = $dbh ->query("SELECT * FROM login");
    $row = $statement ->fetch(PDO::FETCH_ASSOC);

    var_dump($row);
    echo "<pre>" . print_r($row,1) . "</pre>";
?>