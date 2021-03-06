<?php
if($_GET['project'] > 0 && $_GET['project'] < 7){
    $projectnr = $_GET['project'] - 1;
} else {
    $projectnr = 0;
}

$project1img = array("IMG_4562.jpg", "IMG_9693.jpg", "IMG_4133.jpg", "IMG_2974.jpg", "IMG_9425.jpg", "IMG_4053.jpg", "IMG_3958.jpg", "IMG_5618.jpg", "IMG_2668.jpg", "IMG_2444.jpg");
$project2img = array("IMG_6009.jpg", "IMG_6023.jpg", "IMG_5918.jpg", "IMG_5767.jpg", "IMG_5775.jpg", "IMG_3899.jpg", "IMG_3882.jpg", "IMG_3850.jpg", "IMG_9801.jpg", "IMG_3617.jpg", "IMG_3315.jpg", "IMG_3285.jpg", "IMG_3157.jpg", "IMG_6036.jpg");
$project3img = array("IMG_9675.jpg", "IMG_9667.jpg", "IMG_1418.jpg", "IMG_9711.jpg", "IMG_9679.jpg", "IMG_9666.jpg");
$project4img = array("IMG_7933.jpg", "IMG_8025.jpg", "IMG_8018.jpg", "IMG_5432.jpg", "IMG_5162.jpg", "IMG_5251.jpg", "IMG_5317.jpg", "IMG_5392.jpg", "IMG_5430.jpg", "IMG_0265.jpg", "IMG_0229.jpg", "IMG_0202.jpg", "IMG_0094.jpg");
$project5img = array("IMG_9903.jpg", "IMG_9966.jpg", "IMG_9957.jpg", "IMG_9985.jpg", "IMG_2077.jpg", "IMG_2068.jpg", "IMG_1099.jpg", "IMG_1102.jpg");
$project6img = array("IMG_3795.jpg", "IMG_5962.jpg", "IMG_3156.jpg", "IMG_3722.jpg", "IMG_9681.jpg", "IMG_4469.jpg", "IMG_3964.jpg", "IMG_3028.jpg", "IMG_2981.jpg" );
$imagesPath = array($project1img, $project2img, $project3img, $project4img, $project5img, $project6img);

$project1text = array('title' => "Street", 'text' => "<i>&bdquo;If your photos aren’t good enough, then you’re not close enough&ldquo;</i> – Robert Capa");
$project2text = array('title' => "Around the World", 'text' => "<i>&bdquo;Traveling—it leaves you speechless, then turns you into a storyteller.</i> - Ibn Battuta");
$project3text = array('title' => "Z&uuml;rich", 'text' => "Pictures from my favorite City. I love Z&uuml;rich, I think it's one of the most beautiful cities in the world. <a target='_blank' href='https://www.zuerich.com/en'>Zurich.ch</a>");
$project4text = array('title' => "Switzerland", 'text' => "Little Switzerland is for me one of the most beautiful countries in the world. It's nature is so versatile, from the highest mountains to the most beautiful cities, you can find everything in that little country. <a target='_blank' href='http://grandtour.myswitzerland.com/en/'>Switzerland Grand Tour</a>");
$project5text = array('title' => "Night", 'text' => "<i>&bdquo;I often think that the night is more alive and more richly colored than the day. - Vincent Van Gogh&ldquo;</i>");
$project6text = array('title' => "Black &amp; White", 'text' => "<i>&bdquo;When you photograph people in color, you photograph their clothes. But when you photograph people in Black and white, you photograph their souls!&ldquo;</i> - Ted Grant");
$texts = array($project1text, $project2text, $project3text, $project4text, $project5text, $project6text);

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <?php include_once("includes/header.html");?>
</head>

<body id="page-top" class="index">
    <div class="portfolio-modal" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">          
        <div class="modal-content" onclick="location.href='index.php#portfolio';">
                <div class="close-modal">
                    <div class="lr">
                    <div class="rl">
                </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?php echo $texts[$projectnr]['title'];?></h2>
                            <hr class="star-primary">
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="
    margin-right: 10%;
    margin-left: 10%;
    max-height: 100vh;
">
 <!-- Indicators -->
  <ol class="carousel-indicators">
   <?php $i = 0;
    foreach($imagesPath[$projectnr] as $path){?>
        <?php if ($i == 0){?>
            <li data-target="#myCarousel" data-slide-to=<?php echo $i;?> class="active"></li>
        <?php } else { ?>
            <li data-target="#myCarousel" data-slide-to=<?php echo $i;?>></li>
        <?php }   
        $i = $i + 1;
    } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $i = 0;
    foreach($imagesPath[$projectnr] as $path){?>
        <?php if ($i == 0){?>
            <div class="item active">
                <img src= <?php echo "img/portfolio/" . $path;?> class="img-responsive img-centered" alt="image">
            </div>
        <?php } else { ?>
            <div class="item">
                <img src= <?php echo "img/portfolio/" . $path;?> class="img-responsive img-centered" alt="image">
            </div>
        <?php }   
        $i = $i + 1;
     } ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <div>
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <p><?php echo $texts[$projectnr]['text'];?></p>
                            <ul class="list-inline item-details">
                                <li>Photographer:
                                    <strong><a target=_blank" href="https://instagram.com/eliaperenzin">Elia Perenzin</a>
                                    </strong>
                                </li>
                            </ul>
                            <a href="index.php#portfolio"><button type="button" class="btn btn-default"><i class="fa fa-times"></i> Close</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    
    <!-- Bootstrap Core JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript 
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    -->
    <script src="js/freelancer.js"></script> 

    <script type="javascript/text">

    </script>
</body>

</html>
