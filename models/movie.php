<?php
class Movie
{
    public $title;
    public $director;
    public $id;
    public $genre;

    public function __construct($id, $title, $genre, $director)
    {
        $this->id = $id;
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
    }


}

$movie1 = new Movie('amazon', 'marco', 'george');

$movie1->infoMovie();