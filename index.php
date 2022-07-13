<?php

class Movie
{
    public $titolo;
    public $genere;
    public $anno;


    function __construct($_titolo, $_genere, $_anno)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->anno = $_anno;
    }

    public function genereAnno()
    {
        return "<span> genere </span>: " . $this->genere . ".<br>  <span>anno</span>: " . $this->anno;
    }
}

$movie1 = new Movie("walf of wall street", "commedia", 2013);
$movie2 = new Movie("stranger things", "fantascienza", 2016);


echo $movie1->titolo . $movie1->genereAnno() . ".<br> Genere: " . $movie1->genere . ".<br> Anno: " . $movie1->anno . ".";
echo "<br>";
echo "<br>";
echo $movie2->titolo . $movie2->genereAnno() . ".<br> Genere: " . $movie2->genere . ".<br> Anno: " . $movie2->anno . ".";
