<?php
$path = "assets/img/";

$movies = [

    new Movies(
        'Matrix', 
        'In Matrix, Thomas Anderson, programmatore informatico di giorno e hacker conosciuto come "Neo" di notte, scopre che la realtà in cui vive è un\'illusione creata da una intelligenza artificiale malvagia, nota come "Matrix".', 
        1999, 
        new Genre('fantasy'), 
        $path . 'matrix.jpg'
    ),

    new Movies(
        'Titanic', 
        'Rose ha diciassette anni, una madre egoista, un fidanzato facoltoso e una vita pianificata. Imbarcata sul Titanic e insoddisfatta della propria subalternità al futuro sposo incontra Jack, romantico disegnatore della terza classe che ha vinto a poker ...', 
        1997, 
        new Genre('drama'), 
        $path . 'titanic.jpg'
    ),

    new Movies(
        'Guardiani della Galassia  Vol.3 ', 
        'Peter Quill, ancora provato dalla perdita di Gamora, deve riunire la sua squadra per difendere l\'universo e proteggere uno di loro. Una missione che, se non sarà portata a termine con successo, potrebbe portare alla fine dei Guardiani così come li .', 
        2023, 
        new Genre('fantasy'),  
        $path . 'guardiani.jpg'
    ),

    new Movies(
        'Deadpool', 
        'Tratto dal fumetto sul più irriverente anti-eroe dell’universo Marvel, il film racconta la storia del mercenario Wade Wilson, ex agente operativo delle Special Forces, che, dopo essere stato sottoposto a un terribile esperimento, acquisisce l’ec ...', 
        2016, 
        new Genre('fantasy'),  
        $path . 'deadpool.jpg'
    ),

    
    new Movies(
        'Iron Man', 
        'Anthony Stark è un inventore geniale e miliardario col vizio delle donne (tante) e delle attività filantropiche. Ereditato patrimonio e ingegno dal padre scomparso in un incidente d\'auto, Tony (per amici e amichette) conduce e amministra le Industr ...', 
        2008, 
        new Genre('fantasy'),  
        $path . 'iron_man.jpg'
    ),

    
    new Movies(
        'Avatar', 
        'Jake Sully è un marine costretto su una sedia a rotelle che accetta di trasferirsi sul pianeta Pandora in sostituzione del fratello morto, la cui missione era quella di esplorare il pianeta. Essendo l\'atmosfera del pianeta tossica per gli umani sono ...', 
        2009, 
        new Genre('fantasy'),  
        $path . 'avatar.jpg'
    ),
];

//var_dump($matrix, $titanic);