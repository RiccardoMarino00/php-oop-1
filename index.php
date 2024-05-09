<?php

class Production {
   public $title;
   public $language;
   public $vote;


   function __construct (string $_title, string $_language, int $_vote)
   {
    $this -> setTitle($_title);
    $this-> setLanguage($_language);
    $this -> vote = $_vote;
   }


   // SETTER FOR TITLE LANGUAGE AND VOTE
   public function setTitle(string $new_title)
   {
      $this -> title = $new_title;
   }

   public function setLanguage(string $new_language)
   {
      $this -> language = $new_language;
   }

//    public function setVote(string $new_vote)
//    {
//       $this -> vote = $new_vote;
//    }


   // GETTER FOR TITLE LANGUAGE AND VOTE
   public function getTitle()
   {
    return $this -> title;
   }

   public function getLanguage()
   {
    return $this -> language;
   }

//    public function getVote(): int
//    {
//     return $this -> vote;
//    }
}

$TopGun = new Production ('Top Gun', 'English', 10);
$EatPreyLove = new Production ('Eat Prey Love', 'English', 9);
var_dump($TopGun, $EatPreyLove);