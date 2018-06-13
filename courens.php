    <?php
    // on se connecte à notre base
    require'db.php';
    session_start();
    // lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
    $sql = "SELECT * FROM cours ORDER BY `nom_cours` ASC";

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
    <title>cours | Gestion des emplois de temps</title>
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
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
    <div id="wrap">

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
         <!-- HEADER SECTION -->
       
  <div id="left" >


          <?php
          require"espaceens.php";
          require "menuens.php";
          ?>  
      </div>


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2></h2>



                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4> Listes des cours</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           <th>Nom de cours</th>
                                        <th>Cours</th>
                                        
                                        <!-- <th>nom class</th>
                                        <th>Enseignant</th> -->
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
                                   $id_cours=$data['id_cours'];
                                   ?>
<td name="nom_cours"><?php echo $data['nom_cours']; ?></td>
<!-- <td name="fichier"><?php echo $data['fichier']; ?></td> -->
<!-- <td name="nom_class"><?php echo $data['nom_class'];?></td>
<td name="nom_enseignant"><?php echo $data['nom_enseignant'];?></td>  -->        
                                   <td name="fichier" ><?php echo ("<a href=\"pdf.php?idcour=".$data['id_cours']."\" target=\"_blank\"/>"); ?>
                                        <i class="icon-eye-open" ></i>
                                   </td>
                    
                                   <td name="nombredheure">
                                <div class="toolbar">

                                    <ul class="nav">
    <?php echo ("<a  onclick=\"return confirm(' Voulez-vous vraiment supprimer cette cours?')\" href=\"delcours.php?idPersonne=".$data['id_cours']."\">");?>
         <i class="icon-remove"></i></a>
</ul>
        </div> 
                                  </td>
                             
                            </tr>
                            <?php
                        }
                        mysqli_free_result ($req);
                        // mysqli_close ($con);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- ajout cour-->

    <div class="row">
        <div class="col-lg-12">
            <div class="box dark">
                <header>
                    <div class="icons"><i class="icon-plus"></i></div>
                    <h5>Ajouter un cour</h5>
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
                    <form class="form-horizontal" id="ajoutcours" enctype="multipart/form-data" action="ajoutcours.php" method="post">
                        <input type="hidden" name="size" value="1000000">
                        <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <input type="text" name="reference_cours" placeholder="Réference de cours :" class="form-control" />
                            </div>
                        </div>
                         <!-- <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <input type="text" name="nom_cours" placeholder="Nom de cours :" class="form-control" />
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <input type="text" name="nom_cours" placeholder="Nom de cours :" class="form-control" />
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <input type="text" name="nom_matiere"  placeholder="Nom de matiére :" class="form-control" />
                            </div>
                        </div>
                       <!--  <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <input type="text" name="enseignant"  placeholder="Nom de l'enseignant  :" class="form-control" />
                            </div>
                        </div> -->
                         <!-- <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <input type="text" name="enseignant"  placeholder="Nom de l'enseignant  :" class="form-control" />
                            </div>
                        </div> -->
                       <!--  <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <select name="post" class="form-control">
                                    <option >Choisir votre class</option>
                                         <?php
    // lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires

    $sql1 = "SELECT nom_class FROM class";

    // on lance la requête (mysqli_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
    $req1 = mysqli_query($con,$sql1) or die();
    // on va scanner tous les tuples un par un
    if(mysqli_num_rows($req1)>0)
                                while ($data = mysqli_fetch_assoc($req1)) {
                                   $id_class=$data['id_class'];
                                   ?>

    <option value="nom_class"><?php echo $data['nom_class']; ?></option>

                                 
                               
                            
                            </tr>
                            <?php
                        }
                        mysqli_free_result ($req1);
                       
                        ?>
                                    
                                    
                                </select>
                            </div>                              
                                   </div> -->
                                 <!--   <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <select name="post" class="form-control">
                                    <option >Choisir votre enseignant</option>
                                         <?php
    // lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires

    $sql2 = "SELECT nom_enseignant FROM ens";

    // on lance la requête (mysqli_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
    $req2 = mysqli_query($con,$sql2) or die();
    // on va scanner tous les tuples un par un
    if(mysqli_num_rows($req2)>0)
                                while ($data = mysqli_fetch_assoc($req2)) {
                                   $id_enseignant=$data['id_enseignant'];
                                   ?>

    <option value="nom_enseignant"><?php echo $data['nom_enseignant']; ?></option>

                                  -->
                               
                              <!--  <td name="nombredeseance"><?php echo $data['nombredeseance'];?></td>
                                <td name="coef"><?php echo $data['coef'];?></td> -->
                          <!--   </tr>
                            <?php
                        }
                        mysqli_free_result ($req2);
                       
                        ?>
                                    
                                    
                                </select>
                            </div>                              
                                   </div> -->

                           <!--  <div class="form-group">
                                <div class="col-lg-8 col-lg-push-4">
                                    <input type="email"  name="email" placeholder="Adresse email :" class="form-control" />
                                </div>
                            </div>
 -->
                            <!-- <div class="form-group"> -->
                                <!-- <label for="text2" class="control-label col-lg-4">With Placeholder</label>

                                <div class="col-lg-8 col-lg-push-4">
                                    <input type="password" id="text2" placeholder="Mot de passe" name="password" class="form-control" />
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label class="control-label col-lg-4"></label>
                                <div class="col-lg-8">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">



                                        <div class="input-group">


                                           <!--  <span class="btn btn-file btn-info">
                                                <span class="fileupload-new">Select file</span>
                                                <span class="fileupload-exists">Change</span>
                                                <input type="file" />
                                            </span> -->
                                           <!--  <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a> -->
                                            <input type="file" name="fichier">

                                            <!-- <br /> <br /> -->
                                            <div class="col-lg-3">
                                                <i class="icon-file fileupload-exists"></i>
                                                <!-- <span class="fileupload-preview"></span> -->
                                            </div>
                                    </div>
                                </div>
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

<script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/jquery.dataTables.js"></script>
    <script src="assets/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->


</body>

<!-- END BODY -->
</html>
