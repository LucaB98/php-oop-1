<?php

include_once __DIR__ . '/person.php';

class Movie
{
    public $title;
    public $director;
    public $id;
    public $genre;
    public $cast=[];

    public function __construct($id, $title, $genre, Person $director)
    {
        $this->id = $id;
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;

    }

    public function addActor(Person $actor, $role){
        if($actor instanceof Person){
            $this->cast[$role] = $actor;
        }
    }

    public function getCastNames()
    {
        $names = '';
        foreach($this->cast as $role => $actor){
            $names .= $role .': '. $actor->getFullName() . ', ';
        }

        return substr($names, 0, -2);
    }
}

