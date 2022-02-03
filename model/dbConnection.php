<?php

$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "";


try {
    $conn = new PDO("mysql:host=$dbServer; dbName=php_test", $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}

catch(PDOException $e) {
    $error_message = $e->getMessage();
    ?>
    <h1>Database Connection Error</h1>
    <p>There was and error connecting to the database</p>
    <p>Error message:<?php echo $error_message;?></p>
    <?php
    exit($error_message);
}
?>