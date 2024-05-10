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

};

$films = [
   new Production ('Top Gun', 'English', 10, 'https://www.ecranlarge.com/uploads/image/001/199/obe6dugbk95jabwiio5uwmu7dyj-919.jpg'),
   new Production ('Eat Prey Love', 'English', 9, 'https://3.bp.blogspot.com/-6V6FyZlfBx4/T274sG4LuyI/AAAAAAAAFpg/dhb2615GqdM/s1600/eat_pray_love06.jpg'),
   new Production ('Avengers Infinity War', 'English', 8, 'https://th.bing.com/th/id/OIP.ZkOmuqOWNqKDYkMKe2YeAgAAAA?rs=1&pid=ImgDetMain'),
];


class Movie extends Production{
   public $profit;
   public $time;

   
   function __construct(string $_title, string $_language, int $_vote, string $_img, string $_profit, string $_time)
   {
      parent::__construct(string $_title, string $_language, int $_vote, string $_img);
      $this->profit = $_profit;
      $this->time = $_time;

   }

};

class TvSerie extends Production {
   public $numberOfSeason;


   function __construct(string $_title, string $_language, int $_vote, string $_img, string $_numberOfSeason)
   {
      parent::__construct(string $_title, string $_language, int $_vote, string $_img);

   }


};

$movies = 

[
   new Movie ('Odissea nello spazio', 'English', 10, 'https://i0.wp.com/www.cinefilos.it/wp-content/uploads/2016/03/2001-Odissea-nello-spazio.jpeg', '50 milioni', '2h 29min'),
   new Movie ('Hunger Games', 'English', 8, 'https://th.bing.com/th/id/R.2c46722c7c0394c64b94fe4fecff4df0?rik=P7XCiPc0zGsOaA&riu=http%3a%2f%2fcdn.collider.com%2fwp-content%2fuploads%2fthe-hunger-games-mockingjay-part-1-teaser-poster.jpg&ehk=nuV8PDGL%2b%2fTfsPSnsASmJnFUBoa9%2bhY1%2bYDsgwLqBIA%3d&risl=1&pid=ImgRaw&r=0', '865 milioni $', '142 min'),
   new Movie ('Murder Mistery 2', 'English', 7, 'https://th.bing.com/th/id/R.f19d99d1524afc765068cae97dcf073e?rik=oV243%2fpru9r6zA&riu=http%3a%2f%2fwww.impawards.com%2f2023%2fposters%2fmurder_mystery_two_xxlg.jpg&ehk=IGBvGDvZLLmDGMkUbNAojbUO3SAcYqKNbxWBkYruQMI%3d&risl=&pid=ImgRaw&r=0', '300 milioni', '89 min'),
];

$tvSeries = 
[
   new TvSerie ('Black Mirror', 'English', 10, 'https://2.bp.blogspot.com/-rzmFWErb4LQ/WuxujHgRtPI/AAAAAAAABQQ/RW9zWff5XIcVffNDcwaapyrmTecOA1A9QCLcBGAs/s1600/black-mirror-font-1513096756.jpg', '6 stagioni'),
   new TvSerie ('Friends', 'English', 10, 'https://image.tmdb.org/t/p/original/lNnDkWusKRO3P9CuhbAvsDCG1BV.jpg', '10 stagioni'),
   new TvSerie ('The Crown', 'English', 7, 'https://flxt.tmsimg.com/assets/p17251088_b_v13_ab.jpg', '6 stagioni'),

]



?>