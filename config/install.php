<?php
include_once './dbclass.php';
try {
    $dbclass = new DBClass();
    $connection = $dbclass . getConnection();
    $sql = file_get_contents("data/database.sql");
    $connection->exec($sql);
    echo "Database and tables created successfully!";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
