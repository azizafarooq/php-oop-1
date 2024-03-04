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


    function __construct($title, $language, $rating){
        $this->title= $title;
        $this->language = $language;
        $this->rating = $rating;
    }

};

$first_movie = new Production("La vita è bella", "Italiano","9");
$second_movie = new Production("Inception", "Inglese","8");
var_dump($first_movie, $second_movie);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Production</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1>Movies</h1>
        <thead>
            <tr>
                <th>Movie</th>
                <th>Language</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            <th>
                <?php 
                ?>
            </th>
        </tbody>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>