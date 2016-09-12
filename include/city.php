<?php

if (!isset($_SESSION)) { session_start(); }
include('rank.php');

$_SESSION['favorite'] = $_SERVER['QUERY_STRING'];
if ($_SESSION['favorite']!=null) {
	error_log($_SERVER['REMOTE_ADDR']." ". $_SERVER['HTTP_X_FORWARDED_FOR']." --> Favorite is --> ".$_SESSION['favorite']);
}

$cities = array("adelaide", "melbourne", "sydney", "brisbane", "perth", "hobart");

foreach ($cities as $city) { if ($_SESSION[$city] == 0) { $topcity = $city; } }
$lastrank = 0;
foreach ($cities as $city) {
  if ($_SESSION[$city] > $lastrank) {
    $lastrank = $_SESSION[$city];
    $lastcity = $city;
  }
}

$city = 'adelaide';
$title[$city] = 'Adelaide';
$triviatxt[$city] = '<p>Among most liveable cities in the world. An extraordinary achievement given so few live there. Green credentials backed by policy of frequent random power outages. <small>source:&nbsp;Martin Haese</small></p>';
$rank = $_SESSION[$city];
$next[$city] = $topcity;
foreach ($cities as $nextcity) { if ($_SESSION[$nextcity] == ($rank+1)) { $next[$city] = $nextcity; } }
$prev[$city] = $city;

$city = 'melbourne';
$title[$city] = 'Melbourne';
$triviatxt[$city] = '<p>Famous for its dark narrow alley ways and cafe culture. When ordering do as the locals do and use the expression: Where is my goddam latte? The barista will love you for it. <small>source:&nbsp;Robert Doyle</small></p>';
$rank = $_SESSION[$city];
$next[$city] = $topcity;
foreach ($cities as $nextcity) { if ($_SESSION[$nextcity] == ($rank+1)) { $next[$city] = $nextcity; } }
$prev[$city] = $city;

$city = 'sydney';
$title[$city] = 'Sydney';
$triviatxt[$city] = '<p>The international city. Features most expensive airport parking in the world. Dine before 8pm to beat the lockout laws. <small>source:&nbsp;Clover Moore</small></p>';
$rank = $_SESSION[$city];
$next[$city] = $topcity;
foreach ($cities as $nextcity) { if ($_SESSION[$nextcity] == ($rank+1)) { $next[$city] = $nextcity; } }
$prev[$city] = $city;

$city = 'brisbane';
$title[$city] = 'Brisbane';
$triviatxt[$city] = '<p>Multiple modes of transport to get you straight back to the airport including train, taxi and tinny during the wet season. The dry season occurs on August 21 at approximately 2:pm. <small>source:&nbsp;Graham Quirk</small></p>';
$rank = $_SESSION[$city];
$next[$city] = $topcity;
foreach ($cities as $nextcity) { if ($_SESSION[$nextcity] == ($rank+1)) { $next[$city] = $nextcity; } }
$prev[$city] = $city;

$city = 'perth';
$title[$city] = 'Perth';
$triviatxt[$city] = '<p>Perth. What is left to be said that has not been said. A lot actually as little has been said. <small>source:&nbsp;Lisa Scaffidi</small></p>';
$rank = $_SESSION[$city];
$next[$city] = $topcity;
foreach ($cities as $nextcity) { if ($_SESSION[$nextcity] == ($rank+1)) { $next[$city] = $nextcity; } }
$prev[$city] = $city;

$city = 'hobart';
$title[$city] = 'Hobart';
$triviatxt[$city] = '<p>Famous for the record breaking MONA museum. MONA features in all 10 spots of the top 10 things to do. <small>source:&nbsp;Sue Hickey</small></p>';
$rank = $_SESSION[$city];
$next[$city] = $topcity;
foreach ($cities as $nextcity) { if ($_SESSION[$nextcity] == ($rank+1)) { $next[$city] = $nextcity; } }
$prev[$city] = $city;

foreach ($cities as $city) {
  $_SESSION['rank_'.$city] = $_SESSION[$city];
  $_SESSION['title_'.$city] = $title[$city];
  $_SESSION['triviatxt_'.$city] = $triviatxt[$city];
  $_SESSION['next_'.$city] = $next[$city];
  $_SESSION['prev_'.$city] = $prev[$city];
}

?>
