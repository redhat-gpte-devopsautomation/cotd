<?php

if (!isset($_SESSION)) { session_start(); }
include('rank.php');

$_SESSION['favorite'] = $_SERVER['QUERY_STRING'];
if ($_SESSION['favorite']!=null) {
	error_log($_SERVER['REMOTE_ADDR']." ". $_SERVER['HTTP_X_FORWARDED_FOR']." --> Favorite is --> ".$_SESSION['favorite']);
}

$cities = array("adelaide", "melbourne", "sydney", "brisbane", "perth", "hobart", "canberra", "auckland", "wellington", "christchurch");

foreach ($cities as $city) { if ($_SESSION[$city] == 0) { $topcity = $city; } }
$lastrank = 0;
foreach ($cities as $city) {
  if ($_SESSION[$city] > $lastrank) {
    $lastrank = $_SESSION[$city];
    $lastcity = $city;
  }
}

foreach ($cities as $city) {
  $rank = $_SESSION[$city];
  $next[$city] = $topcity;
  foreach ($cities as $nextcity) { if ($_SESSION[$nextcity] == ($rank+1)) { $next[$city] = $nextcity; } }
  $prev[$city] = $city;
}

foreach ($cities as $city) {
  $_SESSION['rank_'.$city] = $_SESSION[$city];
  $_SESSION['next_'.$city] = $next[$city];
  $_SESSION['prev_'.$city] = $prev[$city];
}

?>
