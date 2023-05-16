<?php

$movies = [

    $matrix = new Movies('Matrix', 'In Matrix, Thomas Anderson, programmatore informatico di giorno e hacker conosciuto come "Neo" di notte, scopre che la realtà in cui vive è un\'illusione creata da una intelligenza artificiale malvagia, nota come "Matrix".', 1999, new Genre('fantasy')),
    $titanic = new Movies('Titanic', 'Rose ha diciassette anni, una madre egoista, un fidanzato facoltoso e una vita pianificata. Imbarcata sul Titanic e insoddisfatta della propria subalternità al futuro sposo incontra Jack, romantico disegnatore della terza classe che ha vinto a poker ...', 1997, new Genre('drama')),
    $guardiano =  new Movies('Guardiani della Galassia  Vol.3 ', 'Peter Quill, ancora provato dalla perdita di Gamora, deve riunire la sua squadra per difendere l\'universo e proteggere uno di loro. Una missione che, se non sarà portata a termine con successo, potrebbe portare alla fine dei Guardiani così come li .', 2023, new Genre('fantasy'))
];

//var_dump($matrix, $titanic);