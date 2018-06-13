<?php
// on se connecte à notre base
require'db.php';
session_start();
// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
$sql = "SELECT * FROM users Order BY post";

// on lance la requête (mysqli_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysqli_query($con,$sql) or die();



?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>Gestion ds emplois </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
    <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >


        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">


                    </a>
                </header>


            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        <div id="left" >


          <?php
          require"espace.php";
          require "menu.php";
          ?>  
      </div>
      <!--END MENU SECTION -->


      <!--PAGE CONTENT -->
      <div id="content">

        <div class="inner" style="min-height: 700px;">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <h1></h1>
                    </div>
                </div> -->


                <!-- CHART & CHAT  SECTION -->

   <!--  // on affiche les résultats
 //   echo 'Nom : '.$data['nom'].'<br />';
 //  echo 'Son tél : '.$data['id'].'<br /><br />';?> -->

 
<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-plus"></i></div>
                <h5>Ajouter un enseignant</h5>
                <div class="toolbar">
                    <ul class="nav">
                        <li>
                            <a class="accordion-toggle minimize-box"
                            data-toggle="collapse"
                            href="#div-1">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <div id="div-1" class="accordion-body collapse in body">
            <div id="ajoututil">
                <form class="form-horizontal" id="ajoutmat" action="ajenseignant1.php" method="POST">
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                            <input type="text" name="CIN" placeholder="CIN:" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                            <input type="text" name="nom_enseignant" placeholder="Nom de l'enseignant :*" class="form-control" />
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                                            <label>Choisir votre sexe</label>
                                            <div class="radio"  >
                                                <label>
                                                    <input type="radio" name="sexe"  id="optionsRadios1" value="Homme"  />Homme
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="sexe" id="optionsRadios2" value="Femme" />Femme
                                                </label>
                                            </div>
                                           
                                        </div>
                                    </div>
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                            <input type="email" name="email" placeholder="Adresse email :" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                            <input type="password" name="mdp_admin" placeholder="Mot de passe :" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                            <input type="number" name="tel" placeholder="Téléphone :" class="form-control" />
                        </div>
                    </div>
                    
        
          
    
            
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                            <textarea  type="text" name="nom_matiere" placeholder="Listes des matiéres :" class="form-control" ></textarea>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                            <input  type="text" name="nom_dep" placeholder="Nom de departement :" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                            <input type="text" name="nom_class" placeholder="Nom de class :" class="form-control" />
                        </div>
                    </div>

     
                  
                    
                 
                    <div class="form-group" >
                        <div class="col-lg-4 col-lg-push-8">
                            <input type="submit" name="valider" id="btnvalider" value="Valider" class="btn col-lg-10 col-lg-push-2 btn-primary  " />
                        </div></div>



                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- Debut ajout class-->
    



<!--TABLE, PANEL, ACCORDION AND MODAL  -->


</div>

</div>

</div>
</div>

<!--END MAIN WRAPPER -->

<!-- FOOTER -->
<div id="footer">
    <p>&copy;  ESSAT &nbsp;2018 &nbsp;</p>
</div>
<!--END FOOTER -->


<!-- GLOBAL SCRIPTS -->
<script src="assets/plugins/jquery-2.0.3.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<!-- END GLOBAL SCRIPTS -->

<!-- PAGE LEVEL SCRIPTS -->
<script src="assets/plugins/flot/jquery.flot.js"></script>
<script src="assets/plugins/flot/jquery.flot.resize.js"></script>
<script src="assets/plugins/flot/jquery.flot.time.js"></script>
<script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
<script src="assets/js/for_index.js"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<!-- </div>  -->

</body>

<!-- END BODY -->
</html>

