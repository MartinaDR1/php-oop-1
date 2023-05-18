<?php
class Movies{
    public $title;
    public $description;
    public $genre;
    public $year;
    public $image_path;
  
    function __construct(string $title, string $description, $year, Genre $genre, $image_path = ""){
        $this->title= $title;
        $this->description= $description;
        $this->checkyear($year);
        $this->genre = $genre;
        $this->image_path = $image_path;
    }

    
    function checkyear($year) {
        $this->year = $year;
    }
};
