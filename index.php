<?php
  session_start();

  require "conf.inc.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Le Meilleur de l'actualité</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="themetypo.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="css/widget.css" rel="stylesheet">
        <link href="color.css" rel="stylesheet">
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
    	<link href="css/jquery.bxslider.css" rel="stylesheet">    
    	<link href="css/prettyphoto.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="pg-wrapper">
    	   <?php include('header.php') ?>
            <div id="mainbanner">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="http://s.psg.fr/psg/image/phototheque/g/317/63220.jpg" alt="" />
                            <div class="container">
                                <div class="pg-caption">       
                                	<h1>Bienvenue sur Le Meilleur de l'actualité</h1>
                                    <div class="clearfix"></div>        
                                  <p>Sed ut perspiciatis unde omnis iste natus <br>error sit accusantium dolore<br>mque laudantium</p>
                                  <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="http://s.psg.fr/psg/image/phototheque/g/317/63268.jpg" alt="" />
                            <div class="container">
                                <div class="pg-caption">       
                                    <h1>La nouvelle version du site est prévue pour janvier 2017</h1> 
                                    <div class="clearfix"></div>          
                                    <p>Sed ut perspiciatis unde omnis iste natus <br>error sit accusantium dolore</p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="http://s.psg.fr/psg/image/phototheque/g/315/62907.jpg" alt="" />
                            <div class="container">
                                <div class="pg-caption">       
                                    <h1>M-4 avant la nouvelle version du site</h1>
                                    <div class="clearfix"></div>        
                                    <p>Sed ut perspiciatis unde omnis iste natuserror sit accusantium dolore</p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>  
            <div class="pg-content">
        		<section class="pick-event padding-30-topbottom margin-top-minus-40">
                	<div class="container">
                        <div class="row">
                        	<div class="col-md-3">
                                <div class="widget pg-recent-blog">
                                    <div class="pg-widget-title">
                                        <h2>Toute l'actualité</h2>
                                    </div>
                                    <ul>
                                        <?php
                                        for ($i=0; $i < 16; $i++) {
                                        ?>
                                          <li>
                                            <figure>
                                                <a class="pg-recent-thumb" href="#">
                                                    <img src="http://s.psg.fr/psg/image/phototheque/g/317/63219.jpg" alt="">
                                                </a>
                                              <figcaption>
                                                <h3> 
                                                    <a class="news_une" href="#">
                                                        <span>Actu : </span>Meunier dévoile ses ambitions au PSG 
                                                    </a>
                                                </h3>
                                                <p>Thomas Meunier, arrivé pendant le mercato d'été ne déçoit pas à chaque fois qu'il joue. Il n'a pas connu la moindre défaite avec le PSG.</p>
                                                <span class="time-news">Hier</span>
                                            </figure>
                                          </li>
                                        <?php
                                          }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="pg-pagecontent col-md-9">
                                <div class="pg-blog-list pg-grid-blog">
                                    <ul class="row">
                                        <div class="col-md-12 pg-section-title"> 
                                            <h2>Politique</h2>
                                        </div>
                                        <?php
                                            for ($i=0; $i < 3; $i++) { 
                                        ?>
                                          <li class="col-md-4">
                                                <div class="pg-time-zoon"></div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="http://www.lemeilleurdupsg.com/images/miniatures/news/maxune/max_41104.jpg" alt="" title="">
                                                    </a>
                                                </figure>
                                                <div class="pg-blog-info">
                                                    <time datetime="2008-02-14 20:00">14 <span>avril</span></time>
                                                    <h3>
                                                        <a href="#">Sed ut perspiciatis unde omnisiste natus error</a>
                                                    </h3>
                                                  
                                                    <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat...</p>
                                                      
                                                    <div class="clearfix"></div>

                                                    <ul class="pg-team-network">
                                                        <li>
                                                            <a class="fa fa-facebook" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-twitter" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-linkedin" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                          </li>
                                        <?php
                                            }
                                        ?>
                                  
                                    <li class="clearfix"></li>

                                    <div class="col-md-12 pg-section-title"> 
                                        <h2>Sports</h2>
                                    </div>
                                        <?php
                                            for ($i=0; $i < 3; $i++) { 
                                        ?>
                                          <li class="col-md-4">
                                                <div class="pg-time-zoon"></div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="http://www.lemeilleurdupsg.com/images/miniatures/news/maxune/max_41104.jpg" alt="" title="">
                                                    </a>
                                                </figure>
                                                <div class="pg-blog-info">
                                                    <time datetime="2008-02-14 20:00">14 <span>avril</span></time>
                                                    <h3>
                                                        <a href="#">Sed ut perspiciatis unde omnisiste natus error</a>
                                                    </h3>
                                                  
                                                    <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat...</p>
                                                      
                                                    <div class="clearfix"></div>

                                                    <ul class="pg-team-network">
                                                        <li>
                                                            <a class="fa fa-facebook" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-twitter" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-linkedin" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                          </li>
                                        <?php
                                            }
                                        ?>

                                    <li class="clearfix"></li>

                                    <div class="col-md-12 pg-section-title"> 
                                        <h2>Société</h2>
                                    </div>
                                        <?php
                                            for ($i=0; $i < 3; $i++) { 
                                        ?>
                                          <li class="col-md-4">
                                                <div class="pg-time-zoon"></div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="http://www.lemeilleurdupsg.com/images/miniatures/news/maxune/max_41104.jpg" alt="" title="">
                                                    </a>
                                                </figure>
                                                <div class="pg-blog-info">
                                                    <time datetime="2008-02-14 20:00">14 <span>avril</span></time>
                                                    <h3>
                                                        <a href="#">Sed ut perspiciatis unde omnisiste natus error</a>
                                                    </h3>
                                                  
                                                    <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat...</p>
                                                      
                                                    <div class="clearfix"></div>

                                                    <ul class="pg-team-network">
                                                        <li>
                                                            <a class="fa fa-facebook" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-twitter" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-linkedin" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                          </li>
                                        <?php
                                            }
                                        ?>

                                    <li class="clearfix"></li>

                                    <div class="col-md-12 pg-section-title"> 
                                        <h2>Faits divers</h2>
                                    </div>
                                        <?php
                                            for ($i=0; $i < 3; $i++) { 
                                        ?>
                                          <li class="col-md-4">
                                                <div class="pg-time-zoon"></div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="http://www.lemeilleurdupsg.com/images/miniatures/news/maxune/max_41104.jpg" alt="" title="">
                                                    </a>
                                                </figure>
                                                <div class="pg-blog-info">
                                                    <time datetime="2008-02-14 20:00">14 <span>avril</span></time>
                                                    <h3>
                                                        <a href="#">Sed ut perspiciatis unde omnisiste natus error</a>
                                                    </h3>
                                                  
                                                    <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat...</p>
                                                      
                                                    <div class="clearfix"></div>

                                                    <ul class="pg-team-network">
                                                        <li>
                                                            <a class="fa fa-facebook" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-twitter" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-linkedin" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                          </li>
                                        <?php
                                            }
                                        ?>
                                </ul>
                              </div>
                            </div>
                    </div>
                </section>		
              </div>
        <?php include('footer.php'); ?>