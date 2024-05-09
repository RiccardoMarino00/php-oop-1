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

$TopGun = new Production ('Top Gun', 'English', 10, 'https://www.ecranlarge.com/uploads/image/001/199/obe6dugbk95jabwiio5uwmu7dyj-919.jpg');
$EatPreyLove = new Production ('Eat Prey Love', 'English', 9, 'https://3.bp.blogspot.com/-6V6FyZlfBx4/T274sG4LuyI/AAAAAAAAFpg/dhb2615GqdM/s1600/eat_pray_love06.jpg');
// var_dump($TopGun, $EatPreyLove);
// var_dump(get_object_vars($object));
// var_dump($TopGun->title);

$TopTitle = $TopGun -> title;
$TopLanguage = $TopGun -> language;
$TopVote = $TopGun -> vote;
$TopImg = $TopGun -> img;
$EatPreyLoveTitle = $EatPreyLove -> title;
$EatPreyLoveLanguage = $EatPreyLove -> language;
$EatPreyLoveVote = $EatPreyLove -> vote;
$EatPreyLoveImg = $EatPreyLove -> img;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Production</title>
</head>
<body>




<div class="container">
    <div class="row">
        <div class="col">
            <div>
                <img class="img-p" src="<?php echo $TopImg; ?>" >
            </div>
            <div class="info-film">
                <div><?php echo $TopTitle; ?></div> 
                <div><?php echo $TopLanguage; ?></div> 
                <div><?php echo $TopVote; ?></div> 
            </div>
            
        </div>

        <div class="col">
            <div>
                <img class="img-p" src="<?php echo $EatPreyLoveImg; ?>" alt="">
            </div>
            <div class="info-film">
                <p><?php echo $EatPreyLoveTitle; ?></p> 
                <p><?php echo $EatPreyLoveLanguage; ?></p> 
                <p><?php echo $EatPreyLoveVote; ?></p> 
            </div> 
        </div>
    </div>
</div>


    
</body>
</html>


<style>

    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: rgb(0,48,143);

    }

    .row{
        display: flex;
        justify-content: space-around;
        flex-direction: column;
    }

    .col{
        width: 180px;
        height: 400px;
        text-align: center;
        color: white;
        display: flex;
        margin-bottom: 80px;
        
    }

    .container{
        margin-top: 100px;
    }

    .img-p{
        width: 250px;
        border-radius: 10px;

        
    }


    .info-film{
        max-height: 150px;
        background-color: rgba(201,255,229, 0.5);
        border-radius: 10px;
        color: black;
        border: 2px solid white;
        padding: 8px;
    }
</style>