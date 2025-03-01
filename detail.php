<?php
require_once ('php_script/class/movies.php');
require_once ('php_script/data/data.php');


$id = $_GET['id'];
$movie = FetchMovie::getDataById($id);
$genres = [];

$genres = $movie-> getGenres();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Source css -->
    <link type="text/css" rel="stylesheet" href="css/detail.css">

    <title>ATIGA MOVIES</title>
</head>
<body>
    <section class="container">
        <div class="group">
            <img src="<?= $movie->getImage();?>" alt="" class="img-select">
            <h1><?php echo $movie->getTitle(); ?></h1>
            <hr>
            <div class="caption">
                <p><span>Genre : </span>
                    <?php for($i = 1; $i <= 3; $i++):?>
                    <?php print_r($genres[$i]->getName())?>
                    <span><?php echo $i==3 ? "." : ","?></span>
                    <?php endfor;?>
                    <!-- ISI GENRE -->
                </p>
                <p><span>Score : </span><?=  $movie->getScore(); ?>
                    <!-- ISI SKOR -->
                </p>
                <P><span>Release Date : </span><?=  $movie->getDate(); ?>    
                    <!-- ISI RELEASE -->
                </P>
                <p><span>Sinopsis : </span><?=  $movie->getSynopsis(); ?>
                <!-- ISI SINOPSIS -->
                </p>
            </div>
        </div>
    </section>
</body>
</html>