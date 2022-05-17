<?php
require_once('../incs/function.php');
require_once('../incs/connexion.php');
require_once('../incs/chargerClasse.php');

$latest_article = get_latest_article();
$recent_article = get_recent_articles();
$africa_article = get_africa_articles();
$europe_article = get_europe_articles();
$asia_article = get_asia_articles();

?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rechauffement climatique</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
       

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">24ºc, ensoleillé </li>
                                        <li><img src="assets/img/icon/header_icon1.png" alt=""><?php setlocale(LC_TIME, 'fr_FR');date_default_timezone_set('Europe/Moscow');echo utf8_encode(strftime('%A %d %B %Y, %H:%M')); ?>                                                                                       </li>
                                    </ul>
                                </div>
                                
                            </div>
                       </div>
                   </div>
                </div>
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="assets/img/hero/header_card.jpg" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block ">
                                    
                                    <nav>                  
                                        <ul id="navigation">    
                                            <li><a href="index.html">Accueil</a></li>
                                            <li><a href="#">Actus par continent</a>
                                                <ul class="submenu">
                                                    <li><a href="actualite">Afrique</a></li>
                                                    <li><a href="actualite">Amerique du Nord</a></li>
                                                    <li><a href="actualite">Amerique du Sud</a></li>
                                                    <li><a href="actualite">Europe</a></li>
                                                    <li><a href="actualite">Oceanie</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="connection">Login</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <h1>Rechauffement climatique</h1>
               
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="assets/img/<?php echo $latest_article[0]->_image?>" alt="">
                                <div class="trend-top-cap">
                                    <span><?php echo $latest_article[0]->_continent?></span>
                                    <h2><a href="actualite/<?php echo $latest_article[0]->_id ?>"><br> <?php echo $latest_article[0]->_titre ?></a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <?php for ($i=0;$i<count($recent_article);$i++){?>
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="assets/img/<?php echo $recent_article[$i]->_image?>" width=400 height=200 alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1"><?php echo $recent_article[$i]->_continent ?></span>
                                        <h4><a href="actualite/<?php echo $recent_article[$i]->_id ?>"><?php echo $recent_article[$i]->_titre?></a></h4>
                                    </div>
                                </div>
                                
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                    <?php for ($i=0;$i<count($europe_article);$i++){ ?>
                        <div class="trand-right-single d-flex">
                            
                            <div class="trand-right-cap">
                                <span class="color1"><?php echo $europe_article[$i]->_continent?></span>
                                <h4><a href="actualite/<?php echo $europe_article[$i]->_id ?>"><?php echo $europe_article[$i]->_titre?></a></h4>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Actualité en Afrique</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <?php for ($i=0;$i<count($africa_article);$i++){?>
                            <div class="weekly-single active">
                                <div class="weekly-img">
                                        <img src="assets/img/<?php echo $africa_article[$i]->_image?>" width=400 height=200 alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1"><?php echo $africa_article[$i]->_continent ?></span>
                                    <h4><a href="actualite/<?php echo $africa_article[$i]->_id ?>"><?php echo $africa_article[$i]->_titre ?></a></h4>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>        
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">

                        <div class="section-tittle mb-30">
                            <h3>Actualité en Asie</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <?php for ($i=0;$i<count($asia_article);$i++){?>
                            <div class="weekly-single active">
                                <div class="weekly-img">
                                        <img src="assets/img/<?php echo $asia_article[$i]->_image?>" width=400 height=200 alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1"><?php echo $asia_article[$i]->_continent ?></span>
                                    <h4><a href="actualite/<?php echo $asia_article[$i]->_id ?>"><?php echo $asia_article[$i]->_titre ?></a></h4>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>    
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Actualité en Europe</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <?php for ($i=0;$i<count($europe_article);$i++){?>
                            <div class="weekly-single active">
                                <div class="weekly-img">
                                        <img src="assets/img/<?php echo $europe_article[$i]->_image?>" width=300 height=300 alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1"><?php echo $europe_article[$i]->_continent ?></span>
                                    <h4><a href="actualite/<?php echo $europe_article[$i]->_id ?>"><?php echo $europe_article[$i]->_titre ?></a></h4>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>       
    <!-- End Weekly-News -->
   
    
    
    
    
    </main>
    
   <footer>
       <!-- Footer Start-->
       
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                              
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>                             
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
   
		<!-- Jquery, Popper, Bootstrap -->
		
       
        <script src="./assets/js/bootstrap.min.js"></script>
	   

		<!-- Jquery Slick , Owl-Carousel Plugins -->
     
        <script src="./assets/js/slick.min.js"></script>
        

        
    </body>
</html>