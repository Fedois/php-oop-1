<?php

class Movies{
    private $originalTitle;
    private $description; 
    private $vote;

    function __construct(string $_originalTitle, string $_description, int $_vote = NULL)
    {
        $this->getString($_originalTitle);
        $this->description = $_description;
        $this->getVote($_vote);
    }

    private function getString($_originalTitle){
        if($_originalTitle == '' || is_numeric($_originalTitle)){
            echo 'errore.';
            die;
        }
        else{
            $this->originalTitle = $_originalTitle;
        }
    }

    private function getVote($_vote){
        if ($_vote >= 0 && $_vote <= 5) {
            $this->vote = $_vote;
        } 
        else {
            echo 'errore voto. deve essere tra 0 e 5 compresi';
            exit;
        }
    }
}


$UP = new Movies('UP', 'Un venditore di palloncini di 78 anni, Carl Fredricksen, realizza finalmente il suo sogno quando collega...', 5);
var_dump($UP);

$creed = new Movies('Creed I', 'Adonis Johnson (Jordan) non ha mai conosciuto il suo celebre padre...');
var_dump($creed);





?>