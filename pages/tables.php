<?php
require_once('../incs/function.php');
require_once('../incs/connexion.php');
require_once('../incs/chargerClasse.php');

$liste_articles = get_articles();


?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
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
 
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Utilisateurs</span>
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
                    <h1>Rechauffement climatique</h1>
                        
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                
                            </ol>
                            <a href="connection" 
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Se déconnecter</a>
                                
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">  Table</h3>
                            <a href="ajouter.php"><button type="button" class="btn btn-success">Ajouter</button></a>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Id</th>
                                            <th class="border-top-0">Titre</th>
                                            <th class="border-top-0">Continent</th>
                                            <th class="border-top-0">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i=0;$i<count($liste_articles);$i++) {?>
                                        <tr>
                                            <td><?php echo $liste_articles[$i]->_id ?></td>
                                            <td><?php echo $liste_articles[$i]->_titre?></td>
                                            <td><?php echo $liste_articles[$i]->_continent?></td>
                                            <td><?php echo $liste_articles[$i]->_date?></td>
                                            <td><a href="modifier.php?id=<?php echo $liste_articles[$i]->_id?>"><button type="button" class="btn btn-primary">Modifier</button></td>
                                            <td><a href="traitement/traitement-delete.php?id=<?php echo $liste_articles[$i]->_id?>"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
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