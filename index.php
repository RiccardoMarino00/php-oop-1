<?php
require_once  __DIR__. '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Production</title>
</head>
<body>

<header>
    <div class="container-header">
        <div class="row-header">
            <div><i class="fa-solid fa-clapperboard logo"></i></div>
            <input type="text" placeholder="cerca un film" class="input-header">
            <ul class="social-header">
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>

</header>

<main>
 <div class="container">
    <div class="row">
        <?php
        foreach($films as $film):
        ?>

        <div class="col-card">
            <div class="cnt-img">
                <img class="img-p" src="<?php echo $film->img; ?>" alt="">
            </div>
            <div class="info-film">
                <span class="mr"><?php echo $film->title; ?> | </span> 
                <span class="mr"><?php echo $film->language; ?> | </span> 
                <span class="vote">Voto: <?php echo $film->vote; ?></span> 
                <span><?php echo $film->genre->nomeGenre ?></span> <br>
                <span><?php echo $film->genre->descrizioneGenre ?></span>
            </div> 
        </div>
        <?php
        endforeach
        ?>

        <?php
        foreach($movies as $movie):
        ?>

        <div class="col-card">
            <div class="cnt-img">
                <img class="img-p" src="<?php echo $movie->img; ?>" alt="">
            </div>
            <div class="info-film">
                <span class="mr"><?php echo $movie->title; ?> | </span> 
                <span class="mr"><?php echo $movie->language; ?> | </span> 
                <span class="vote">Voto: <?php echo $movie->vote; ?></span>  <br>
                <span><?php echo $movie->profit ?> | </span> <br>
                <span><?php echo $movie->time ?></span>
            </div> 
        </div>
        <?php
        endforeach
        ?>

        <?php
        foreach($tvSeries as $tvSerie):
        ?>
        <div class="col-card">
            <div class="cnt-img">
                <img class="img-p" src="<?php echo $tvSerie->img; ?>" alt="">
            </div>
            <div class="info-film">
                <span class="mr"><?php echo $tvSerie->title; ?> | </span> 
                <span class="mr"><?php echo $tvSerie->language; ?> | </span> 
                <span class="vote">Voto: <?php echo $tvSerie->vote; ?></span> 
                <span ><?php echo $tvSerie->numberOfSeason; ?> | </span> 

            </div> 
        </div>
        <?php
        endforeach
        ?>

    </div>
 </div>
</main>



    <script src="https://kit.fontawesome.com/cf3b3313c9.js" crossorigin="anonymous"></script>
</body>
</html>

<?php 

include __DIR__. '/Style/styleHeader.php'; 
include __DIR__. '/Style/styleMain.php';
include __DIR__. '/Style/styleCard.php';  

?>

<style>

    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Lato", sans-serif;
        font-weight: 400;
        font-style: normal;
        background: rgb(0,0,0);
        background: linear-gradient(162deg, rgba(0,0,0,1) 51%, rgba(159,13,23,1) 100%);
    }

    ul, li, ol, menu{
        list-style: none;
    }


    a{
        text-decoration: none;
        color: currentcolor;
    }
    
 

</style>