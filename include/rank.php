<?php

// Change item rankings and assocviated data here
// If adding new entries then also update swipe-page.css and images directory

if (!isset($_SESSION)) { session_start(); }

// Change ranking order here
$_SESSION['adelaide'] = 0;
$_SESSION['melbourne'] = 1;
$_SESSION['sydney'] = 2;
$_SESSION['brisbane'] = 3;
$_SESSION['perth'] = 4;
$_SESSION['hobart'] = 5;
//$_SESSION['canberra'] = 6;
//$_SESSION['darwin'] = 7;

//Change page title here
$_SESSION['title_adelaide'] = 'Adelaide Cat';
$_SESSION['title_melbourne'] = 'Melbourne Cat';
$_SESSION['title_sydney'] = 'Sydney Cat';
$_SESSION['title_brisbane'] = 'Brisbane Cat';
$_SESSION['title_perth'] = 'Perth Cat';
$_SESSION['title_hobart'] = 'Hobart Cat';

// $_SESSION['title_adelaide'] = 'Ginger Cat';
// $_SESSION['title_melbourne'] = 'Prize Cat';
// $_SESSION['title_sydney'] = 'Birthday Cat';
// $_SESSION['title_brisbane'] = 'Toilet Cat';
// $_SESSION['title_perth'] = 'Fat Cat';
// $_SESSION['title_hobart'] = 'Wet Cat';

// Change trivia here
// Cats Trivia
$_SESSION['triviatxt_adelaide'] = '<p>I live in Adelaide. My dad plays for the Adelaide Crows. He has a big mullet which I snuggle into when he is asleep. <small>Lord Mayor:&nbsp;Martin Haese</small></p>';
$_SESSION['triviatxt_melbourne'] = '<p>My house is in Melbourne. I like to go to Philosophy Meetups. My favourite is Descates. He said: I think therefore I cat. <small>Lord Mayor:&nbsp;Robert Doyle</small></p>';
$_SESSION['triviatxt_sydney'] = '<p>I am from Sydney. I do not go out any more at night since they implemented the lock out laws. <small>Lord Mayor:&nbsp;Clover Moore</small></p>';
$_SESSION['triviatxt_brisbane'] = '<p>Hello from Brisbane. I love it here because the floods bring fish straight to my door step. <small>Lord Mayor:&nbsp;Graham Quirk</small></p>';
$_SESSION['triviatxt_perth'] = '<p>I was born in Perth. My parents work FIFO at the mines so I do not get to see them much. <small>Lord Mayor:&nbsp;Lisa Scaffidi</small></p>';
$_SESSION['triviatxt_hobart'] = '<p>Greetings from Hobart. There is not much to do here so thank goodness for the NBN. <small>Lord Mayor:&nbsp;Sue Hickey</small></p>';

// Cities
// $_SESSION['triviatxt_adelaide'] = '<p>Among most liveable cities in the world. An extraordinary achievement given so few live there. Green credentials backed by policy of frequent random power outages. <small>Lord Mayor:&nbsp;Martin Haese</small></p>';
// $_SESSION['triviatxt_melbourne'] = '<p>Famous for its dark narrow alley ways and cafe culture. When ordering do as the locals do and use the expression: Where is my goddam latte? The barista will love you for it. <small>Lord Mayor:&nbsp;Robert Doyle</small></p>';
// $_SESSION['triviatxt_sydney'] = '<p>The international city. Features most expensive airport parking in the world. Dine before 8pm to beat the lockout laws. <small>Lord Mayor:&nbsp;Clover Moore</small></p>';
// $_SESSION['triviatxt_brisbane'] = '<p>Multiple modes of transport to get you quickly back to the airport including train, taxi and tinny during the wet season. The dry season occurs on August 21 at approximately 2:00 pm. <small>Lord Mayor:&nbsp;Graham Quirk</small></p>';
// $_SESSION['triviatxt_perth'] = '<p>Perth. What is left to be said that has not been said. A lot actually as little has been said. <small>Lord Mayor:&nbsp;Lisa Scaffidi</small></p>';
// $_SESSION['triviatxt_hobart'] = '<p>Famous for the record breaking MONA museum. MONA features in all 10 spots of the top 10 things to do. <small>Lord Mayor:&nbsp;Sue Hickey</small></p>';

?>
