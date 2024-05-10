<?php

class Production {
   public $title;
   public $language;
   public $vote;
   public $img;


   function __construct (string $_title, string $_language, int $_vote, string $_img)
   {
    $this -> setTitle($_title);
    $this-> setLanguage($_language);
    $this -> vote = $_vote;
    $this -> img = $_img;
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


   // GETTER FOR TITLE LANGUAGE AND VOTE
   public function getTitle()
   {
    return $this -> title;
   }

   public function getLanguage()
   {
    return $this -> language;
   }

}

$films = [
   new Production ('Top Gun', 'English', 10, 'https://www.ecranlarge.com/uploads/image/001/199/obe6dugbk95jabwiio5uwmu7dyj-919.jpg'),
   new Production ('Eat Prey Love', 'English', 9, 'https://3.bp.blogspot.com/-6V6FyZlfBx4/T274sG4LuyI/AAAAAAAAFpg/dhb2615GqdM/s1600/eat_pray_love06.jpg'),
   new Production ('Avengers Infinity War', 'English', 8, 'https://th.bing.com/th/id/OIP.ZkOmuqOWNqKDYkMKe2YeAgAAAA?rs=1&pid=ImgDetMain'),
];


// $TopTitle = $TopGun -> title;
// $TopLanguage = $TopGun -> language;
// $TopVote = $TopGun -> vote;
// $TopImg = $TopGun -> img;
// $EatPreyLoveTitle = $EatPreyLove -> title;
// $EatPreyLoveLanguage = $EatPreyLove -> language;
// $EatPreyLoveVote = $EatPreyLove -> vote;
// $EatPreyLoveImg = $EatPreyLove -> img;
// $AvengersTitle = $Avengers -> title;



?>