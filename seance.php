<?php
// on se connecte à notre base
require'db.php';
session_start();
// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
$sql = "SELECT * FROM seance Order BY id_seance";

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
   <title>Seance | Listes des emplois</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
   <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES --> 

    <!-- PAGE LEVEL STYLES -->
    
 <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
   
    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
                <!-- <ul class="nav navbar-top-links navbar-right"> -->
                    <!--ADMIN SETTINGS SECTIONS -->

                  <!--   <li class="dropdown">
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

                    </li> -->
                    <!--END ADMIN SETTINGS -->
                    <!-- </ul> -->

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

 <div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <!-- <div class="row"> -->
                <!-- <div class="col-lg-12"> -->
                    <div class="box dark">
                        <header>

                            <h5>Listes des séances</h5>


                        </header>


                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>Jour</th>
                                        <th>Heure</th>
                                        <th>Class</th>
                                        <th>Matiére</th>
                                        <th>Enseignant</th>
                                        <th>Salle</th>
                                        <th>Action</th>
                                         </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires


// on va scanner tous les tuples un par un
                            if(mysqli_num_rows($req)>0)
                                while ($data = mysqli_fetch_assoc($req)) {
                                   $id_seance=$data['id_seance'];
                                   ?>


                                   <!-- <td name="id"><?php echo $data['id']; ?></td> -->
                                   <td name="jour"><?php echo $data['jour']; ?></td>
                                   <td name="dat_debut"><?php echo $data['dat_debut']; ?></td>
                                   <td name="nom_dep"><?php echo $data['nom_dep']; ?></td>
                                  
                                   <td name="nom_matiere"><?php echo $data['nom_matiere'];?></td>
                                   <td name="nom_enseignant"><?php echo $data['nom_enseignant'];?></td>
                                   <td name="nom_salle"><?php echo $data['nom_salle'];?></td>
                                   <td name="semaine"><?php echo $data['semaine'];?></td>

                                   <td name="nombredheure">
                                    <div class="toolbar">

                                        <ul class="nav">
                                            <?php echo ("<a  onclick=\"return confirm(' Vous etes sur ?')\" href=\"delseance.php?idPersonne=".$data['id_seance']."\">");?>
                                             <i class="icon-remove"></i></a>


                                             <?php echo ("<a  href=\"modifseance.php?idPersonne=".$data['id_seance']."\">"); ?>
                                              <i class="icon-edit">

                                              </i>
                                          </a>

                                      </ul>

                                      <!-- <div class="col-lg-4">  -->
                                        <!-- <div class="panel panel-default">  -->





                                            <!-- </div> -->
                                        </td>
                          <!--  <td name="nombredeseance"><?php echo $data['nombredeseance'];?></td>
                            <td name="coef"><?php echo $data['coef'];?></td> -->
                        </tr>
                        <?php
                    }
                    mysqli_free_result ($req);
                    mysqli_close ($con);
                    ?>
                 <!--    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<!-- </div>
</div>
</div> -->
<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-plus"></i></div>
                <h5>Ajouter une séance</h5>
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
                <form class="form-horizontal" id="ajoutmat" action="ajseance.php" method="POST">
                  <div id="datePickerBlock" class="body collapse in">
               
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="dp1">Donner la date</label>

                        <div class="col-lg-3" name="semaine">
                            <input type="datetime" class="form-control" name="semaine" value="Entrer date" id="dp1" />
                        </div>
                    </div>
                       </div>

              
                  <div class="form-group">
                    <div class="col-lg-8 col-lg-push-4">
                        <select name="jour" class="form-control">
                            
                            <option value="Lundi">Lundi</option>
                            <option value="Mardi">Mardi</option>
                            <option value="Mercredi">Mercredi</option>
                            <option value="Jeudi">Jeudi</option>
                            <option value="Vendredi">Vendredi</option>
                            <option value="Samedi">Samedi</option>
                        </select>
                    </div>                
                </div> 
                <div class="form-group">
                    <div class="col-lg-8 col-lg-push-4">
                        <select name="dat_debut" class="form-control">
                           
                            <option value="08.10 - 09.40">08.10 - 09.40</option>
                            <option value="08.10 - 11.20">08.10 - 11.20</option>
                            <option value="09.50 - 11.20">09.50 - 11.20</option>
                            <option value="09.50 - 13.00">09.50 - 13.00</option>
                            <option value="11.30 - 13.00">11.30 - 13.00</option>
                            <option value="14.20 - 15.50">14.20 - 15.50</option>
                            <option value="14.20 - 17.30">14.20 - 17.30</option>
                            <option value="16.00 - 17.30">16.00 - 17.30</option>
                            <!-- <option value="Samedi">Samedi</option> -->
                        </select>
                    </div>                
                </div>
                <!--Ajout matiere-->
                <div class="form-group">
                    <div class="col-lg-8 col-lg-push-4">
                       <select name="nom_dep" class="form-control" onchange="afficher(this.value)">
                                           
                        <?php
                        require"db.php";
                        $res=mysqli_query($con,"select * from departement  ");
                        while ($r=mysqli_fetch_array($res,MYSQLI_NUM))
                            { echo '<option>'.$r[1].'</option>' ; }
                        ?> 
                    </select>  
                </div>
            </div>
                <div class="form-group">
                    <div class="col-lg-8 col-lg-push-4">
                       <select name="nom_matiere" class="form-control" onchange="afficher(this.value)">
                                           
                        <?php
                        require"db.php";
                        $res=mysqli_query($con,"select * from matiere  ");
                        while ($r=mysqli_fetch_array($res,MYSQLI_NUM))
                            { echo '<option>'.$r[1].'</option>' ; }
                        ?> 
                    </select>  
                </div>
            </div>
                 <div class="form-group">
                    <div class="col-lg-8 col-lg-push-4">
                    <select name="nom_enseignant" class="form-control" onchange="afficher(this.value)">
                       



                        <?php
                        require"db.php";
                        $res=mysqli_query($con,"select * from ens  ");
                        while ($r=mysqli_fetch_array($res,MYSQLI_NUM))
                            { echo '<option>'.$r[1].'</option>' ; }
                        ?> 
                    </select>

</div></div>
<div class="form-group">
                    <div class="col-lg-8 col-lg-push-4">
                       <select name="nom_salle" class="form-control" onchange="afficher(this.value)">
                                           
                        <?php
                        require"db.php";
                        $res=mysqli_query($con,"select * from salle  ");
                        while ($r=mysqli_fetch_array($res,MYSQLI_NUM))
                            { echo '<option>'.$r[1].'</option>' ; }
                        ?> 
                    </select>  
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


      <!-- PAGE LEVEL SCRIPT-->
 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="assets/js/formsInit.js"></script>
        <script>
            $(function () { 
 altField : "#datePickerBlock"
    altFormat: "yyyy-mm-dd"
                formInit(); });
        </script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- </div>  -->

</body>

<!-- END BODY -->
</html>
