<?php
// on se connecte à notre base
require'db.php';
// session_start();
if ($_SERVER['REQUEST_METHOD']=='GET'){

  $id_seance=$_GET['idPersonne'];
}
// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
$sql = "SELECT * FROM seance WHERE id_seance='$id_seance'";

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
        <!-- END HEADER SECTION -->  <!-- MENU SECTION -->
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
              
 <?php if ($result=mysqli_fetch_assoc($req)){
?>

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
                <form name="insertion" class="form-horizontal" id="ajoutmat" action="modifseance2.php" method="POST">
<input type="hidden" name="id_seance" value="<?php echo ($id_seance);?>">
                    <div id="datePickerBlock" class="body collapse in">
               
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="dp1">Donner la date</label>

                        <div class="col-lg-3" name="semaine">
                            <input type="datetime" class="form-control" name="semaine" value="<?php echo($result['semaine']) ;?>" id="dp1"  />
                        </div>
                    </div>
                       </div>
                    <div class="form-group">
                      <label for="text2" class="control-label  col-lg-4">Jour</label>

                        <div class="col-lg-8">

                        <input type="text" name="jour" placeholder="jour :" class="form-control"  value="<?php echo($result['jour']) ;?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Class</label>

                        <div class="col-lg-8">
                            <input type="text" name="nom_dep" id="text1" placeholder="Class" class="form-control" value="<?php echo($result['nom_dep']) ;?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-lg-8 col-lg-push-4">
                    <select name="dat_debut" class="form-control" value="<?php echo($result['dat-debut']) ;?>" >
                        <option value="<?php echo($result['dat-debut']) ;?>"></option>
                            <option value="08.10 - 09.40">08.10 - 09.40</option>
                            <option value="08.10 - 11.20">08.10 - 11.20</option>
                            <option value="09.50 - 11.20">09.50 - 11.20</option>
                            <option value="09.50 - 13.00">09.50 - 13.00</option>
                            <option value="11.30 - 13.00">11.30 - 13.00</option>
                            <option value="14.20 - 15.50">14.20 - 15.50</option>
                            <option value="14.20 - 17.30">14.20 - 17.30</option>
                            <option value="16.00 - 17.30">16.00 - 17.30</option>
                    </select>

</div></div>
                    
                     <div class="form-group">
                       <label for="text2" class="control-label  col-lg-4">Nom de matiére :</label>

                        <div class="col-lg-8 ">
                            <input type="text" name="nom_matiere"  placeholder="Nom de matiére :" class="form-control"  value="<?php echo($result['nom_matiere']) ;?>"/>
                        </div>
                    </div>

                  

                        <div class="form-group">
                          <label for="text2" class="control-label  col-lg-4">Nom de l'enseignant</label>

                            <div class="col-lg-8 ">

                                <input type="text"  name="nom_enseignant" placeholder="Nom de l'enseignant" class="form-control"  value="<?php echo($result['nom_enseignant']) ;?>"/>
                            </div>
                        </div>
                     
                        <div class="form-group">
                          <label for="text2" class="control-label  col-lg-4">Nom de salle</label>

                            <div class="col-lg-8 ">

                                <input type="text"  name="nom_salle" placeholder="Nom de l'salle" class="form-control"  value="<?php echo($result['nom_salle']) ;?>"/>
                            </div>
                        </div>
                     

                        <div class="form-group" >
                            <div class="col-lg-4 col-lg-push-8">
                                <input type="submit" name="valider" id="btnvalider" value="Valider" class="btn col-lg-10 col-lg-push-2 btn-primary  " />
                            </div></div>



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
<script src="assets/plugins/jquery-2.0.3.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>


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
            $(function () { formInit(); });
        </script>
        

<!-- PAGE LEVEL SCRIPTS -->
<script src="assets/plugins/flot/jquery.flot.js"></script>
<script src="assets/plugins/flot/jquery.flot.resize.js"></script>
<script src="assets/plugins/flot/jquery.flot.time.js"></script>
<script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
<script src="assets/js/for_index.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
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
            $(function () { formInit(); });
        </script>
<!-- END PAGE LEVEL SCRIPTS -->
 <!-- </div>  -->

</body>

<!-- END BODY -->
</html>
