<!--
Author: StefanoPicozzi@gmail.com
Blog: https://StefanoPicozzi.blog
GitHub: https://github.com/StefanoPicozzi/cotd.git
Date: 2016
-->

<?php

$count = sizeof( $_SESSION['item'] );
// Pretty up the trivia
for ($i=0; $i < $count; $i++) {

    $_SESSION['item'][$i]['rating'] = 0;

    $trivia = $_SESSION['item'][$i]['trivia'];
    $triviastart = $trivia;
    $triviaend = "";
    $length = strlen($trivia);

    $likepos = strpos($trivia, "Like me");
    $ratepos = strpos($trivia, "Rate ");
    if ( $likepos !== false ) {
        $triviastart = "<p>".substr($trivia, 0, $likepos)."</p>";
        $triviaend = "<p style='color:silver;font-size:100%;font-style:italic'>".substr($trivia, $likepos, $length-$likepos)."</p>";
    } else if ( $ratepos !== false ) {
        $triviastart = "<p>".substr($trivia, 0, $ratepos)."</p>";
        $triviaend = "<p style='color:silver;font-size:100%;font-style:italic'>".substr($trivia, $ratepos, $length-$likepos)."</p>";
    }

    $_SESSION['item'][$i]['trivia'] = $triviastart.$triviaend;
}


// Set up step through cycling


for ($i=0; $i < $count; $i++) {
    if ( $_SESSION['item'][$i]['rank'] == 1 ) {
        $firstitem = $_SESSION['item'][$i]['name'];
        $_SESSION['topitem'] = $firstitem;
    }
    if ( $_SESSION['item'][$i]['rank'] == $count ) {
        $lastitem = $_SESSION['item'][$i]['name'];
    }
}

for ($i=0; $i < $count; $i++) {
    $ranki = $_SESSION['item'][$i]['rank'];
    for ($j=0; $j < $count; $j++) {
        $rankj = $_SESSION['item'][$j]['rank'];
        if ( $rankj == ($ranki+1) ) {       
            $_SESSION['item'][$i]['next'] = $_SESSION['item'][$j]['name'];
        }
        if ( $rankj == ($ranki-1) ) {       
            $_SESSION['item'][$i]['prev'] = $_SESSION['item'][$j]['name'];
        }
    }
    if ( $ranki == 1 ) {       
        $_SESSION['item'][$i]['prev'] = $lastitem;
    }
    if ( $ranki == $count ) {       
        $_SESSION['item'][$i]['next'] = $firstitem;
    }   
}

?>