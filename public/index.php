<?php

require_once 'PDOConnection.php';
require_once './SqlServer.php';

$title = 'Home Page';
$heading1 = '';

$host = 'sql-server';
$dbname = 'classicmodels';
$username = 'root';
$password = 'root';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?> </title>
</head>
<body>
    <?php
        try {
            $sqlServer = new SqlServer($host,$dbname,$username,$password);
            $pdoConnection = new PDOConnection($sqlServer, $username, $password);
            $pdo = $pdoConnection->getPdo(); // Corrected variable name


            $heading1 = 'Connected to the database';
            echo "<h1> $heading1 </h1>";

            $sql = 'SELECT * FROM customers where customerName like "A%"';
            $stmt = $pdo->query($sql);

            while ($row = $stmt->fetch()) {
                echo $row['customerName'] . '<br>';
            }

        } 
        catch (PDOException $e) {
            $message = $e->getMessage();
            echo "<h1>Connection failed: $message </h1>";
        }
    ?>
</body>
</html>
