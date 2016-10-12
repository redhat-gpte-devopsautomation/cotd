<?php

// Select your list theme here eg cats or cities
if ( $selector = getenv('SELECTOR') ) {
    $_SESSION['selector'] = $selector;
} else {
    $_SESSION['selector'] = 'cats';
}
include($_SESSION['selector'].'/rank.php');

?>
