<!--
Author: StefanoPicozzi@gmail.com
Blog: https://StefanoPicozzi.blog
GitHub: https://github.com/StefanoPicozzi/cotd.git
Date: 2016
-->

<?php

// Populate using direct DB access

if ( empty($_SESSION['DBHOST']) ) { return; }

$mysql_hostname = $_SESSION['DBHOST'];
$mysql_port     = $_SESSION['DBPORT'];
$mysql_username = $_SESSION['DBUSER'];
$mysql_dbname   = $_SESSION['DBNAME'];
$mysql_password = $_SESSION['DBPASSWORD'];

// Calculate aggregated ratings
try {
    $dbh = new PDO("mysql:host=$mysql_hostname;port=$mysql_port;dbname=$mysql_dbname", $mysql_username, $mysql_password);
    $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $dbh -> prepare("
        SELECT i.id AS :id, i.name AS :name, SUM(r.rating) AS :total 
        FROM ratings r, items i
        WHERE r.name = i.name
         AND  r.theme = i.theme
         AND  i.theme = :theme
        GROUP BY i.name
        UNION
        SELECT i2.id AS :id, i2.name AS :name, 0 AS :total
        FROM items i2
        WHERE i2.theme = :theme
         AND i2.name NOT IN
        (SELECT DISTINCT r2.name
        FROM ratings r2
        WHERE r2.theme = :theme)
        ORDER BY :total DESC, :id ASC;
    ");

    $id = 0;
    $name = '';
    $total = 0;
    $theme = $_SESSION['SELECTOR'];

    $stmt -> bindParam(':theme', $theme, PDO::PARAM_STR);
    $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
    $stmt -> bindParam(':total', $total, PDO::PARAM_STR);
    $stmt -> bindParam(':id', $id, PDO::PARAM_STR);

    $names[] = array();
    $i = 0;
    $stmt->execute();

    $sumratings = 0;
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        $names[$i] = array(
            'name' => $row[1], 
            'total' => $row[2],
            'rank' => $i+1
        );
        $sumratings = $sumratings + $row[2];
        $i = $i + 1;
    }
    $norows = $i;
  
} catch(Exception $e) {
    $_SESSION['message'] = "Failed to get rank of items. ".$e;
    header('Location: /error.php');
    die();
}

if ( $sumratings > 0 ) {
    // Sort by ranking total descending
    usort($names, function ($a, $b) {
        return -($a['total'] - $b['total']);
    });

    try {
        $dbh = new PDO("mysql:host=$mysql_hostname;port=$mysql_port;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $dbh -> prepare("
            UPDATE items
            SET rank = :rank
            WHERE theme = :theme
            AND  name = :name;
        ");

        $name = '';
        $total = 0;
        $theme = $_SESSION['SELECTOR'];
        $count = sizeof( $names );
    
        for ($i=0; $i < $count; $i++) {
            $rank = $i+1;
            $name = $names[$i]['name'];
            $stmt -> bindParam(':rank', $rank, PDO::PARAM_STR);
            $stmt -> bindParam(':theme', $theme, PDO::PARAM_STR);
            $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->execute();
        }
  
    } catch(Exception $e) {
        $_SESSION['message'] = "Failed to update rank of items. ".$e;
        header('Location: /error.php');
        die();
    }
}

// Populate SESSION array
try {
    $dbh = new PDO("mysql:host=$mysql_hostname;port=$mysql_port;dbname=$mysql_dbname", $mysql_username, $mysql_password);
    $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $dbh -> prepare("
        SELECT
            name AS :name,
            rank AS :rank,
            caption AS :caption,
            trivia AS :trivia, 
            filename AS :filename
        FROM 
            items
        WHERE theme =:theme
        ORDER by id ASC
    ");

    $name = '';
    $rank = 0;
    $caption = '';
    $trivia = '';
    $filename = '';
    $theme = $_SESSION['SELECTOR'];

    $stmt -> bindParam(':theme', $theme, PDO::PARAM_STR);
    $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
    $stmt -> bindParam(':rank', $rank, PDO::PARAM_STR);
    $stmt -> bindParam(':caption', $caption, PDO::PARAM_STR);
    $stmt -> bindParam(':trivia', $trivia, PDO::PARAM_STR);
    $stmt -> bindParam(':filename', $filename, PDO::PARAM_STR);

    $_SESSION['item'] = array();
    $i = 0;
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {

        $name = $row[0];
        $rank = $row[1];
        $caption = $row[2];
        $trivia = $row[3];
        $filename = $row[4];

        $_SESSION['item'][$i] = array(
            'name' => $name,
            'theme' => $theme,      
            'rank' => $rank,
            'caption' => $caption,
            'trivia' => $trivia, 
            'filename' => $filename,
            'prev' => $name,
            'next' => $name,
            'rating' => 0
        );
        $i = $i + 1;

    }
  
} catch(Exception $e) {
    $_SESSION['message'] = "Failed to read items. ".$e;
    header('Location: /error.php');
    die();
}

?>
