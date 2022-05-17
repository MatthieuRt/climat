<?php
require_once('../incs/function.php');
require_once('../incs/connexion.php');
require_once('../incs/chargerClasse.php');

$article = get_article($_GET['id']);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Rechauffement climatique</title>
    

   <link href="css/style.min.css" rel="stylesheet">

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">

                    <a class="navbar-brand" href="dashboard.html">

  
                        <span class="logo-text">

                        <img src="assets/img/images/download.png" width=200 height=50 alt="homepage" />
                        </span>
                    </a>
 
                   
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
     
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.php"
                                aria-expanded="false">
                               
                                <strong class="hide-menu">Liste des tables :</strong>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Articles</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Utilisateurs    </span>
                            </a>
                        </li>
                        
                        
                    </ul>

                </nav>

            </div>

        </aside>

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Basic Table</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">

                            </ol>
                            <a href="login.php" 
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Se déconnecter</a>
                                
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="col-lg-8 col-xlg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" action="traitement/traitement-update.php?id=<?php echo $article[0]->_id?>" method="post">
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Titre</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text"  value = "<?php echo $article[0]->_titre?>" name="titre"
                                            class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Contenu</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <textarea rows="5" class="form-control p-0 border-0" name="contenu" ><?php echo $article[0]->_contenu?></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Continent</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text"  value = "<?php echo $article[0]->_continent?>" name="continent"
                                            class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Date</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text"  name = "date" value = "<?php echo $article[0]->_date?>"
                                            class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Image</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="image"  value = "<?php echo $article[0]->_image?>"
                                            class="form-control p-0 border-0"> </div>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Modifier</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                
                  

            </div>
 
            <footer class="footer text-center"> ETU1187</footer>
                    
            

        </div>

    </div>

    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>