<!--
Author: StefanoPicozzi@gmail.com
Blog: https://StefanoPicozzi.blog
GitHub: https://github.com/StefanoPicozzi/cotd.git
Date: 2016
-->

<?php

session_start();
$_SESSION['SELECTOR'] = $_GET['selector'];
$_SESSION['DBHOST'] = $_GET['dbhost'];
$_SESSION['DBPORT'] = $_GET['dbport'];
$_SESSION['DBUSER'] = $_GET['dbuser'];
$_SESSION['DBPASSWORD'] = $_GET['dbpassword'];
$_SESSION['DBNAME'] = $_GET['dbname'];
$_SESSION['SERVICE'] = $_GET['service'];

include('include/selector.php');
header( 'Location: item.php' );

?>
