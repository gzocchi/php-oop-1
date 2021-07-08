<?php
class Movie
{
    // variables
    public $title;
    public $original_title;
    public $genre = [];
    public $release_year;
    public $original_language;
    public $available_languages = [];
    public $duration;
    public $direction;
    public $cast = [];
    public $producer;
    public $production_house;
    public $overview;
    public $poster;

    // construct
    function __construct($original_title, $direction){
        $this->title = $original_title;
        $this->original_title = $original_title;
        $this->direction = $direction;
    }

    // methods
    public function setDuration($min){
        $this->duration = $min;
    }
    public function getDuration(){
        return $this->duration . " min";
    }
};
