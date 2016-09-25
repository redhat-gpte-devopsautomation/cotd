<?php

// Change item rankings and related attribute data here
// If adding new entries than also add associated image

//if (!isset($_SESSION)) { session_start(); }

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
    'Adelaide Cat',
    'Melbourne Cat',
    'Sydney Cat',
    'Brisbane Cat',
    'Perth Cat',
    'Hobart Cat',
    'Canberra Cat',
    'Auckland Cat',
    'Wellington Cat',
    'Christchurch Cat'
);

// Change trivia here
$_SESSION['trivias'] = array( 
    '<p>My name is Le Cornu and I live in Adelaide. My dad plays for the Adelaide Crows. He has a big mullet which I snuggle into when he is asleep. <small>Like me and we can watch the footie together. </small></p>',
    '<p>My name is Rialto and my house is in Melbourne. I like to go to Philosophy Meetups. My favourite is Descates. He said: I think therefore I cat. <small>Like me and we can workshop your existential mid-life crisis over some wine and cheese.</small></p>',
    '<p>My name is Seidler and I am from Sydney. I do not go out at night any more since they implemented the lock out laws. <small>Like me and we can talk about Sydney property prices.</small></p>',
    '<p>My name is Gabba and I am from Brisbane. I love it here because the floods bring fish straight to my door step. <small>Like me and we can go fishing together.</small></p>',
    '<p>My name is Cottlesloe and I was born in Perth. My parents work FIFO at the mines so I do not get to see them much. <small>Like me and I can stay with you every second week.</small></p>',
    '<p>My name is Mona and I am in Hobart. There is not much to do here so thank goodness for the NBN. <small>Like me and we can watch youtube cat videos using broadband.</small></p>',
    '<p>My name is Burley and my post office box is in Canberra. The Government appointed me into a senior position at the Human Rights Commission. <small>Like me and we can obsess over repealing section 18C together.</small></p>',
    '<p>My name is Ponsonby and I live in Auckland. I made a satellite launch vehicle using a ball of wool, 3 paper clips and a tub of bees wax. <small>Like me and we can build a mud brick metropolis together.</small></p>',
    '<p>My name is Massey and I am in Wellington. I am a contender for Secretary General of the United Nations. <small>Like me unless you rather it be Kevin Rudd.</small></p>',
    '<p>My name is Twizel and I from Christchurch. I had a bit role in the Lord of the Rings trilogy, but so did everyone else. <small>Like me and we can geek out on LOTR trivia for hours on end. </small></p>'
);

?>
