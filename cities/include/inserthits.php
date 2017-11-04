<!--
Author: StefanoPicozzi@gmail.com
Blog: https://StefanoPicozzi.blog
GitHub: https://github.com/StefanoPicozzi/cotd.git
Date: 2016
-->

<?php

if ( empty($_SESSION['DBHOST']) ) { return; }

$mysql_hostname = $_SESSION['DBHOST'];
$mysql_port     = $_SESSION['DBPORT'];
$mysql_username = $_SESSION['DBUSER'];
$mysql_dbname   = $_SESSION['DBNAME'];
$mysql_password = $_SESSION['DBPASSWORD'];

// Insert a hits record
try {
    $dbh = new PDO("mysql:host=$mysql_hostname;port=$mysql_port;dbname=$mysql_dbname", $mysql_username, $mysql_password);
    $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $dbh -> prepare("
    INSERT INTO hits
    (sessionid, theme, name, clientip) 
    VALUES
    (:sessionid, :theme, :name, :clientip);
    ");

    $sessionid = session_id();
    $theme = $_SESSION['SELECTOR'];
    $name = $_SESSION['name'];
    $clientip = $_SERVER['HTTP_CLIENT_IP']?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDE‌​D_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);

    $stmt -> bindParam(':theme', $theme, PDO::PARAM_STR);
    $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
    $stmt -> bindParam(':sessionid', $sessionid, PDO::PARAM_STR);
    $stmt -> bindParam(':clientip', $clientip, PDO::PARAM_STR);
    $stmt->execute();
  
} catch(Exception $e) {
    $_SESSION['message'] = "Failed to insert hits. ".$e;
    header('Location: /error.php');
    die();
}

?>
