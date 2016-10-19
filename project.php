<?php
//TODO validation
$projectnr = $_GET['project'] - 1;

$project1img = array("jksdf");
$project2img = array("jksf", "djfhsa");
$project3img = array();
$project4img = array();
$project5img = array();
$project6img = array();
$imagesPath = array($project1img, $project2img, $project3img, $project4img, $project5img, $project6img);

$project1text = array('title' => "Street", 'text' => "Use this area of the page to describe your project. The icon above is part of a free icon set by <a href='https://sellfy.com/p/8Q9P/jV3VZ/'>Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!");
$project2text = array('title' => "Citys", 'text' => "");
$project3text = array('title' => "At Night", 'text' => "");
$project4text = array('title' => "Swiss Landscapes", 'text' => "");
$project5text = array('title' => "All around the World", 'text' => "");
$project6text = array('title' => "Around my Home", 'text' => "");
$texts = array($project1text, $project2text, $project3text, $project4text, $project5text, $project6text);

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <?php include_once("includes/header.php");?>
</head>

<body id="page-top" class="index">
    <div class="portfolio-modal" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                   <a href="index.php#portfolio">
        <div class="modal-content">
                <div class="close-modal">
                    <div class="lr">
                    <div class="rl">
                </div>
                </div>
                </a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?php echo $texts[$projectnr]['title'];?></h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p><?php echo $texts[$projectnr]['text'];?></p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
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

</body>

</html>
