<?php

$ini_file = '/etc/config/cotd.properties';                                                                                                               
                                                                                                                                                            
// Determine active theme default to cats                                                                                                         
if ( $selector = getenv('SELECTOR') ) {                                                                                                                     
    $_SESSION['selector'] = $selector;                                                                                                                      
} elseif ( file_exists($ini_file) ) {                                                                                                                       
    $ini_array = parse_ini_file($ini_file);                                                                                                                 
    $_SESSION['selector'] = $ini_array['selector'];                                                                                                         
} else {                                                                                                                                                    
    $_SESSION['selector'] = 'cats';                                                                                                                         
}                                        

// Populate theme using local file or remote REST Service
if ( $service = getenv('SERVICE') ) {                                                                                                                     
    include('data/rest.php');
} else {
    include('data/'.$_SESSION['selector'].'.php');
}

// Set up page next and prev
include('prevnext.php');

// Change App name tag here
$_SESSION['app'] = 'COTD';

?>
