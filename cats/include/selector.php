<!--
Author: StefanoPicozzi@gmail.com
Blog: https://StefanoPicozzi.blog
GitHub: https://github.com/StefanoPicozzi/cotd.git
Date: 2016
-->

<?php

$ini_file = '/etc/config/cotd.properties';  

$dbv2 = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbv3 = getenv('DBHOST');
$dbhost = $_SESSION['DBHOST'];

// If DB not set by client then test if OpenShift Online V2 or V3 sidecar
if ( empty($dbhost) ) {

    if ( !empty($dbv2) ) {
        $_SESSION['DBHOST'] = getenv('OPENSHIFT_MYSQL_DB_HOST');
        $_SESSION['DBPORT'] = getenv('OPENSHIFT_MYSQL_DB_PORT');
        $_SESSION['DBUSER'] = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
        $_SESSION['DBPASSWORD'] = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
        $_SESSION['DBNAME'] = 'cotd';
        $_SESSION['V2'] = 'true';
        $_SESSION['DB'] = 'true';
    } elseif ( !empty($dbv3) ) {
        $_SESSION['DBHOST'] = getenv('DBHOST');
        $_SESSION['DBPORT'] = getenv('DBPORT');
        $_SESSION['DBUSER'] = getenv('DBUSER');
        $_SESSION['DBPASSWORD'] = getenv('DBPASSWORD');
        $_SESSION['DBNAME'] = getenv('DBNAME');
        $_SESSION['V3'] = 'true';
        $_SESSION['DB'] = 'true';
    }

} else {
    $_SESSION['V3'] = 'true';
    $_SESSION['DB'] = 'true';
}

$_SESSION['SELECTOR'] = 'cats';

if ( !empty($_SESSION['service']) ) {
    $service = $_SESSION['service'];
} else {
    $service = getenv('SERVICE');
}

// Populate theme using precedence testing for REST then DB then local file
if ( !empty($service) ) {
    include('data/rest.php');
} elseif ( $_SESSION['DB'] == 'true' ) {
    include('data/db.php');
} elseif ( file_exists('data/'.$_SESSION['SELECTOR'].'.php') ) {
    include('data/'.$_SESSION['SELECTOR'].'.php');
} else {
    // Unsupported theme so default to pets
    $_SESSION['SELECTOR'] = 'pets';
    include('data/pets.php');
}

// Set up page next and prev
include('prevnext.php');

// Change App name tag here
$_SESSION['app'] = 'COTD';

?>