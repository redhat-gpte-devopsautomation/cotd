<?php

if (!isset($_SESSION)) { session_start(); }
include('include/city.php');

$cities = array('adelaide', 'melbourne', 'sydney', 'adelaide');
foreach ($cities as $city) {
  if ($_SESSION[$city] == 0) {
		$topcity = $city;
		error_log("Top city is --> ".$topcity);
	}
}
header( 'Location: '.$topcity.'.php' );

?>
