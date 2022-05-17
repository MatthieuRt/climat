<?php
require_once('../incs/function.php');
require_once('../incs/connexion.php');
require_once('../incs/chargerClasse.php');

$article = get_article($_GET['id']);

?>
<!doctype html>
<html class="no-js" lang="zxx">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="Site d'actualité sur le rechauffement climatique">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">

            <link rel="stylesheet" href="../assets/css/ticker-style.css">

            <link rel="stylesheet" href="../assets/css/flaticon.css">

      
            <link rel="stylesheet" href="../assets/css/style.css">
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
                                    <a href="actualite"><img src="../assets/img/logo/logo.png" alt=""></a>
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
                                    <div class="sticky-logo">
                                        <a href="../actualite"><img src="../assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block ">
                                    <nav>                  
                                        <ul id="navigation">    
                                            <li><a href="../actualite">Accueil</a></li>
                                            <li><a href="../actualite">Actus par continent</a>
                                                <ul class="submenu">
                                                    <li><a href="../actualite">Afrique</a></li>
                                                    <li><a href="../actualite">Amerique du Nord</a></li>
                                                    <li><a href="../actualite">Amerique du Sud</a></li>
                                                    <li><a href="../actualite">Europe</a></li>
                                                    <li><a href="../actualite">Oceanie</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="../connection">Login</li>
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
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                            
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                            <h1>Rechauffement climatique</h1>   
                                <div class="about-img">
                                    <img src="../assets/img/<?php echo $article[0]->_image?>" alt="">
                                </div>
                                <div class="section-tittle mb-30 pt-30">
                                    <h2><?php echo $article[0]->_titre?></h2>
                                </div>
                                <div class="about-prea">

                                    <p class="about-pera1 mb-25"><?php echo $article[0]->_contenu ?></p>
                                       
                                </div> 
                                
                                
                            </div>
                            
                        
                   </div>
            </div>
        </div>
        <!-- About US End -->
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
                                 
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
   
	<!-- JS here -->
	
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="../assets/js/jquery.slicknav.min.js"></script>

		
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        
    </body>
</html>