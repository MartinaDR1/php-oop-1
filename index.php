<?php

class Movies{
    public $title;
    public $description;
    public $genre;
    public $year;
    
    function __construct(string $title, string $description, $year, Genre $genre){
        $this->title= $title;
        $this->description= $description;
        $this->checkyear($year);
        $this->genre = $genre;
    }

    
    function checkyear($year) {
        $this->year = $year;
    }
};

class Genre{
    public $genre;

    function __construct(string $genre){
        $this->genre = $genre;
    }
}

$matrix = new Movies('matrix', 'lorem', 2023, new Genre('fantasy'));
$titanic = new Movies('titanic', 'lorem', 2023, new Genre('drama'));



var_dump($matrix, $titanic);

?>



