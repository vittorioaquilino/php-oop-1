
<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php 
    // creo la classe movie
    class Movie {
        public $title;
        public $original_title;
        public $genre;
        public $language;
        public $year;

        // funzione construct
        function __construct($_title, $_original_title, $_genre, $_language, $_year)
        {
            $this->title = $_title;
            $this->original_title = $_original_title;
            $this->genre = $_genre;
            $this->language = $_language;
            $this->year = $_year;
        }

        // funzione valori movies
        public function getMovie() {
            return "Film: " . $this->title . "<br>" . "Titolo originale: " . $this->original_title . "<br>" . "Genere: " . $this->genre . "<br>" . "Lingua: " . $this->language . "<br>" . "Anno: " . $this->year;
        }
    }

    // digito i film
    $Movie1 = new Movie("La teoria del tutto", "The Theory of Everything", "biografico, drammatico", "inglese, francese", "2014");
    $Movie2 = new Movie("The wolf of Wall Street", "The wolf of Wall Street", "biografico, commedia", "inglese", "2013");
    $Movie3 = new Movie("Men in black", "Men in black", "azione, commedia", "inglese", "1997");
    var_dump($Movie1, $Movie2, $Movie3);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $Movie1->getMovie() ?></h2>
    <h2><?php echo $Movie2->getMovie() ?></h2>
    <h2><?php echo $Movie3->getMovie() ?></h2>
</body>
</html>