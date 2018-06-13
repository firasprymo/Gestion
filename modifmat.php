<?php
// on se connecte à notre base
require'db.php';
// session_start();
if ($_SERVER['REQUEST_METHOD']=='GET'){

  $id_matiere=$_GET['idmat'];
}
// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
$sql = "SELECT * FROM matiere WHERE id_matiere='$id_matiere'";

// on lance la requête (mysqli_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysqli_query($con,$sql) or die();

// on va scanner tous les tuples un par un

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
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">
                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> Profile d'utilisateur </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Paramétres </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="index.php"><i class="icon-signout"></i> Déconnexion </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

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

 <?php if ($result=mysqli_fetch_assoc($req)){
    ?>

<!-- </div>
</div>
</div> -->
<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>Modifier les données</h5>
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
                <form name="insertion" class="form-horizontal" id="ajoutmat" action="modifmat2.php" method="POST">
                    <input type="hidden" name="id_matiere" value="<?php echo ($id_matiere);?>">
                    <div class="form-group">
                      <label for="text2" class="control-label  col-lg-4">Nom matiére</label>

                      <div class="col-lg-8">

                        <input type="text" name="nom_matiere" placeholder="" class="form-control"  value="<?php echo($result['nom_matiere']) ;?>" />
                    </div>
                </div>

                <div class="form-group">
                 <label for="text2" class="control-label  col-lg-4">Class</label>

                 <div class="col-lg-8 ">
                    <input type="text" name="nom_class" placeholder="" class="form-control" value="<?php echo($result['nom_class']) ;?>"/>
                </div>
            </div>
            <div class="form-group">
                 <label for="text2" class="control-label  col-lg-4">Enseignant</label>

                 <div class="col-lg-8 ">
                    <input type="text" name="nom_enseignant" placeholder="" class="form-control" value="<?php echo($result['nom_enseignant']) ;?>"/>
                </div>
            </div>
            
            <div class="form-group">
              <label for="text2" class="control-label  col-lg-4">Nombre des heures :</label>

              <div class="col-lg-8 ">
                <input type="text" name="nombredheure" placeholder="" class="form-control"  value="<?php echo($result['nombredheure']) ;?>"/>
            </div>
        </div>
        <div class="form-group">
         <label for="text2" class="control-label  col-lg-4">Nombre des séances :</label>

         <div class="col-lg-8 ">
            <input type="text" name="nombredeseance"  placeholder="" class="form-control"  value="<?php echo($result['nombredeseance']) ;?>"/>
        </div>
    </div>



    <div class="form-group">
      <label for="text2" class="control-label  col-lg-4">Coefficient:</label>

      <div class="col-lg-8 ">

        <input type="text"  name="coef" placeholder="" class="form-control"  value="<?php echo($result['coef']) ;?>"/>
    </div>
</div>
 
                        <!-- <div class="form-group">
                           <label for="text2" class="control-label col-lg-4">With Placeholder</label>

                            <div class="col-lg-8 ">
                                <input type="password" id="text2" placeholder="Mot de passe" name="password" class="form-control" />
                            </div>
                        </div> -->


                        <div class="form-group" >
                            <div class="col-lg-4 col-lg-push-8">
                                <input type="submit" name="valider" id="btnvalider" value="Valider" class="btn col-lg-10 col-lg-push-2 btn-primary  " />
                            </div>
                        </div>



                        </form>
                        <?php }


                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


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
