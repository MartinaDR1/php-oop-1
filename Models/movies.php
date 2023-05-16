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