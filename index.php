<?php
class Movie
{
    public $title;
    public $director;
    public $actor;

    public function __construct($title, $director, $actor)
    {
        $this->title = $title;
        $this->director = $director;
        $this->actor = $actor;
    }

    public function infoMovie()
    {
        echo $this->title . ' ' . $this->director;
    }
}

$movie1 = new Movie('amazon', 'marco', 'george');

$movie1->infoMovie();