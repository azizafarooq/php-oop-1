<?php

class Production {
    public $title;
    public $language;
    public $rating;

    public function get_title(){
        return $this->title;
    }

    public function get_language(){
        return $this->language;
    }


    public function get_rating(){
        return $this->rating;
    }


    function __construct(
        string $title,
        string $language,
        int $rating
    ){
        $this->title= $title;
        $this->language = $language;
        $this->rating = $rating;
    }

};


class Tv_series extends Production {
    public $seasons;
    public $episodes;

    function __construct(
        string $title,
        string $language,
        int $rating,
        int $seasons, 
        int $episodes
    ) {
        parent::__construct($title, $language, $rating);
        $this->seasons = $seasons;
        $this->episodes = $episodes;
    }

};

class Movies extends Production {
    public $profit;
    public $duration;

    function __construct(
        string $title,
        string $language,
        int $rating,
        int $profit, 
        int $duration
    ) {
        parent::__construct($title, $language, $rating);
        $this->profit = $profit;
        $this->duration = $duration;
    }
}

$first_movie = new Production("La vita è bella", "Italiano", 8);
$second_movie = new Production("Inception", "Inglese", 8);
$new_movie = new Movies("La vita è bella", "Italiano", 9,100000, 2);
$new_series = new Tv_series("Titolo", "Italiano", 8, 2, 15);
var_dump($first_movie, $second_movie, $new_movie, $new_series);

?>
