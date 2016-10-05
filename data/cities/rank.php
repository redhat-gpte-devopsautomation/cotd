<?php

// Change item rankings and related attribute data here
// If adding new entries than also add associated image

// Change App name tag here
$_SESSION['app'] = 'COTD';

// Change ranking order here
$_SESSION['ranks'] = array( 
    'adelaide',
    'canberra',
    'melbourne',
    'auckland',
    'sydney',
    'brisbane',
    'perth',
    'hobart',
    'wellington',
    'christchurch'
);

// Item attribute data goes from here
// Maintain order as per 'items' array

$_SESSION['items'] = array( 
    'adelaide',
    'melbourne',
    'sydney',
    'brisbane',
    'perth',
    'hobart',
    'canberra',
    'auckland',
    'wellington',
    'christchurch'
);

$_SESSION['titles'] = array( 
    'Adelaide',
    'Melbourne',
    'Sydney',
    'Brisbane',
    'Perth',
    'Hobart',
    'Canberra',
    'Auckland',
    'Wellington',
    'Christchurch'
);

// Change trivia here
$_SESSION['trivias'] = array( 
    '<p>Among most liveable cities in the world. An extraordinary achievement given so few live there. Green credentials backed by policy of frequent random power outages. <small>Lord Mayor:&nbsp;Martin Haese</small></p>',
    '<p>Famous for its dark narrow alley ways and cafe culture. When ordering do as the locals do and use the expression: Where is my goddamn latte? The barista will love you for it. <small>Lord Mayor:&nbsp;Robert Doyle</small></p>',
    '<p>The international city. Features most expensive airport parking in the world. Dine before 8pm to beat the lockout laws. <small>Lord Mayor:&nbsp;Clover Moore</small></p>',
    '<p>Multiple modes of transport to get you quickly back to the airport including train, taxi and tinny during the wet season. The dry season occurs on August 21 at approximately 2:00 pm. <small>Lord Mayor:&nbsp;Graham Quirk</small></p>',
    '<p>Perth. What is left to be said that has not been said. A lot actually as little has been said. <small>Lord Mayor:&nbsp;Lisa Scaffidi</small></p>',
    '<p>Famous for the record breaking MONA museum. MONA features in all 10 spots of the top 10 things to do. <small>Lord Mayor:&nbsp;Sue Hickey</small></p>',
    '<p>The Capitol Canberra. The Government appointed me into a senior position at the Human Rights Commission. <small>Like me and we can obsess over repealing section 18C together.</small></p>',
    '<p>Auckland. I made a satellite launch vehicle using a ball of wool, 3 paper clips and a tub of bees wax. <small>Like me and we can build a mud brick metropolis together.</small></p>',
    '<p>Ultra cool Wellington. Ultra wet actually. Windy conditions destroy over 18,000 umbrellas here everyday. <small>Like me unless you rather it be Kevin Rudd.</small></p>',
    '<p>Christchurch. I had a bit role in the Lord of the Rings trilogy, but so did everyone else. <small>Like me and we can geek out on LOTR trivia for hours on end. </small></p>'
);    

?>
