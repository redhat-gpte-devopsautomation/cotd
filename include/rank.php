<?php

// Change rankings here
// If adding new entries then also update 1) city.php 2) swipe-page.css 3) images

if (!isset($_SESSION)) { session_start(); }

$_SESSION['adelaide'] = 0;
$_SESSION['melbourne'] = 1;
$_SESSION['sydney'] = 2;
$_SESSION['brisbane'] = 3;
$_SESSION['perth'] = 4;
$_SESSION['hobart'] = 5;

//$_SESSION['canberra'] = 6;
//$_SESSION['darwin'] = 7;

?>
