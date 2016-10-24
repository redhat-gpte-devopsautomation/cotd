<?php


$ini_file = '/etc/config/cotd.properties';                                                                                                               
                                                                                                                                                            
// Select your list theme here eg cats or cities                                                                                                            
if ( $selector = getenv('SELECTOR') ) {                                                                                                                     
    $_SESSION['selector'] = $selector;                                                                                                                      
} elseif ( file_exists($ini_file) ) {                                                                                                                       
    $ini_array = parse_ini_file($ini_file);                                                                                                                 
    $_SESSION['selector'] = $ini_array['selector'];                                                                                                         
} else {                                                                                                                                                    
    $_SESSION['selector'] = 'cats';                                                                                                                         
}                                        

include($_SESSION['selector'].'/rank.php');

?>
