<?php
require_once  __DIR__. '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Production</title>
</head>
<body>

<header>
    <div class="container"></div>

</header>

<main>
 <div class="container">
    <div class="row">
        <div class="col-card">
            <div class="cnt-img">
                <img class="img-p" src="<?php echo $TopImg; ?>" >
            </div>
            <div class="info-film">
                <span class="mr"><?php echo $TopTitle; ?></span> 
                <span class="mr"><?php echo $TopLanguage; ?></span> 
                <span class="vote"><?php echo $TopVote; ?></span> 
            </div>
            
        </div>

        <div class="col-card">
            <div class="cnt-img">
                <img class="img-p" src="<?php echo $EatPreyLoveImg; ?>" alt="">
            </div>
            <div class="info-film">
                <span class="mr"><?php echo $EatPreyLoveTitle; ?></span> 
                <span class="mr"><?php echo $EatPreyLoveLanguage; ?></span> 
                <span class="vote"><?php echo $EatPreyLoveVote; ?></span> 
            </div> 
        </div>
    </div>
 </div>
</main>



    
</body>
</html>

<?php 

include __DIR__. './Style/styleHeader.php'; 
include __DIR__. './Style/styleMain.php';
include __DIR__. './Style/styleCard.php';  

?>

<style>

    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: rgb(0,48,143);

    }

    
 

</style>