<?php

class Movies{
    private $originalTitle;
    private $description;
    private $genres; 
    private $vote;

    function __construct(string $_originalTitle, string $_description, array $_genres, int $_vote = NULL)
    {
        $this->getTitle($_originalTitle);
        $this->description = $_description;
        $this->getGenred($_genres);
        $this->getVote($_vote);
    }

    private function getTitle($string){
        if($string == '' || is_numeric($string)){
            echo 'errore stringa.';
            die;
        }
        else{
            $this->originalTitle = $string;
        }
    }

    private function getGenred($_genres){
        if (is_array($_genres) && !empty($_genres)) {
            $this->genres = $_genres;
        } 
        else {
            echo 'errore array';
            exit;
        }
    }

    private function getVote($_vote){
        if ($_vote >= 0 && $_vote <= 5) {
            $this->vote = $_vote;
        } 
        else {
            echo 'errore voto.';
            exit;
        }
    }
}


$UP = new Movies('UP', 'Un venditore di palloncini di 78 anni, Carl Fredricksen, realizza finalmente il suo sogno quando collega...', array('famiglia', 'avventura'), 5);
var_dump($UP);

$creed = new Movies('Creed I', 'Adonis Johnson (Jordan) non ha mai conosciuto il suo celebre padre...', array('azione', 'sportivo'));
var_dump($creed);





?>