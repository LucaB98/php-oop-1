<?php

include_once __DIR__ . '/director.php';

class Movie
{
    public $title;
    public $director;
    public $id;
    public $genre;
    public $cast;

    public function __construct($id, $title, $genre, Director $director, array $cast = [])
    {
        $this->id = $id;
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->cast = $cast;
    }

    public function getCastNames()
    {
        $names = '';
        foreach($this->cast as $actor){
            $names .= $actor->getFullName() . ', ';
        }

        return substr($names, 0, -2);
    }
}

