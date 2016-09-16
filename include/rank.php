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
$_SESSION['canberra'] = 6;
$_SESSION['auckland'] = 7;
$_SESSION['wellington'] = 8;
$_SESSION['christchurch'] = 9;

//Change page title here
$_SESSION['title_adelaide'] = 'Adelaide Cat';
$_SESSION['title_melbourne'] = 'Melbourne Cat';
$_SESSION['title_sydney'] = 'Sydney Cat';
$_SESSION['title_brisbane'] = 'Brisbane Cat';
$_SESSION['title_perth'] = 'Perth Cat';
$_SESSION['title_hobart'] = 'Hobart Cat';
$_SESSION['title_canberra'] = 'Canberra Cat';
$_SESSION['title_auckland'] = 'Auckland Cat';
$_SESSION['title_wellington'] = 'Wellington Cat';
$_SESSION['title_christchurch'] = 'Christchurch Cat';

//Change page title here
// $_SESSION['title_adelaide'] = 'Adelaide';
// $_SESSION['title_melbourne'] = 'Melbourne';
// $_SESSION['title_sydney'] = 'Sydney';
// $_SESSION['title_brisbane'] = 'Brisbane';
// $_SESSION['title_perth'] = 'Perth';
// $_SESSION['title_hobart'] = 'Hobart';

// $_SESSION['title_adelaide'] = 'Ginger Cat';
// $_SESSION['title_melbourne'] = 'Prize Cat';
// $_SESSION['title_sydney'] = 'Birthday Cat';
// $_SESSION['title_brisbane'] = 'Toilet Cat';
// $_SESSION['title_perth'] = 'Fat Cat';
// $_SESSION['title_hobart'] = 'Wet Cat';

// Change trivia here
// Cats Trivia
$_SESSION['triviatxt_adelaide'] = '<p>My name is Le Cornu and I live in Adelaide. My dad plays for the Adelaide Crows. He has a big mullet which I snuggle into when he is asleep. <small>Swipe right and we can watch the footie together. </small></p>';
$_SESSION['triviatxt_melbourne'] = '<p>My name is Rialto and my house is in Melbourne. I like to go to Philosophy Meetups. My favourite is Descates. He said: I think therefore I cat. <small>Swipe right and we can workshop your existential mid-life crisis over some wine and cheese.</small></p>';
$_SESSION['triviatxt_sydney'] = '<p>My name is Seidler and I am from Sydney. I do not go out any more at night since they implemented the lock out laws. <small>Swipe right and we can talk about Sydney property prices.</small></p>';
$_SESSION['triviatxt_brisbane'] = '<p>My name is Gabba and I am from Brisbane. I love it here because the floods bring fish straight to my door step. <small>Swipe right and we can go fishing together.</small></p>';
$_SESSION['triviatxt_perth'] = '<p>My name is Cottlesloe and I was born in Perth. My parents work FIFO at the mines so I do not get to see them much. <small>Swipe right and I can stay with you every second week.</small></p>';
$_SESSION['triviatxt_hobart'] = '<p>My name is Mona and I am in Hobart. There is not much to do here so thank goodness for the NBN. <small>Swipe right and we can watch youtube cat videos using broadband.</small></p>';
$_SESSION['triviatxt_canberra'] = '<p>My name is Burley and my post office box is in Canberra. The Government appointed me into a senior position at the Human Rights Commission. <small>Swipe right and we can obsess over repealing section 18C together.</small></p>';
$_SESSION['triviatxt_auckland'] = '<p>My name is Ponsonby and I live in Auckland. I made a satellite launch vehicle using a ball of wool, 3 paper clips and some bees wax. <small>Swipe right and we can build a mud brick metropolis together.</small></p>';
$_SESSION['triviatxt_wellington'] = '<p>My name is Massey and I am in Wellington. I am a contender for Secretary General of the United Nations. <small>Swipe right unless you rather it be Kevin Rudd.</small></p>';
$_SESSION['triviatxt_christchurch'] = '<p>My name is Twizel and I from Christchurch. I had a bit role in the Lord of the Rings trilogy, but so did everyone else. <small>Swipe right and we can geek out on LOTR trivia for hours on end. </small></p>';

// Cities Trivia
// $_SESSION['triviatxt_adelaide'] = '<p>Among most liveable cities in the world. An extraordinary achievement given so few live there. Green credentials backed by policy of frequent random power outages. <small>Lord Mayor:&nbsp;Martin Haese</small></p>';
// $_SESSION['triviatxt_melbourne'] = '<p>Famous for its dark narrow alley ways and cafe culture. When ordering do as the locals do and use the expression: Where is my goddam latte? The barista will love you for it. <small>Lord Mayor:&nbsp;Robert Doyle</small></p>';
// $_SESSION['triviatxt_sydney'] = '<p>The international city. Features most expensive airport parking in the world. Dine before 8pm to beat the lockout laws. <small>Lord Mayor:&nbsp;Clover Moore</small></p>';
// $_SESSION['triviatxt_brisbane'] = '<p>Multiple modes of transport to get you quickly back to the airport including train, taxi and tinny during the wet season. The dry season occurs on August 21 at approximately 2:00 pm. <small>Lord Mayor:&nbsp;Graham Quirk</small></p>';
// $_SESSION['triviatxt_perth'] = '<p>Perth. What is left to be said that has not been said. A lot actually as little has been said. <small>Lord Mayor:&nbsp;Lisa Scaffidi</small></p>';
// $_SESSION['triviatxt_hobart'] = '<p>Famous for the record breaking MONA museum. MONA features in all 10 spots of the top 10 things to do. <small>Lord Mayor:&nbsp;Sue Hickey</small></p>';

?>
