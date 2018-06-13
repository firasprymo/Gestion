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
    <title>Accueil | Gestion des emplois de temps</title>
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
          require"espace.php";
          require "menu.php";
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
                           <h4> Listes des utilisateurs</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           <th>CIN</th>
                                        <th>Nom</th>
                                        
                                        <th>Adresse email</th>
                                        <th>Rôle</th>
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
                                   $post=$data['post'];
                                   ?>


                                   <!-- <td name="id"><?php echo $data['id']; ?></td> -->
                                   <td name="CIN"><?php echo $data['CIN']; ?></td>
                                   <td name="first_name"><?php echo $data['first_name']; ?></td>
                                   <!-- <td name="last_name"><?php echo $data['last_name']; ?></td> -->
                                   <td name="email"><?php echo $data['email'];?></td>
                                   <td name="post"><?php echo $data['post'];?></td>
                                   <td name="nombredheure">

                                    <div class="toolbar">

                                        <ul class="nav">
                                            <?php echo ("<a  onclick=\"return confirm(' Vous etes sur ?')\" href=\"delutil.php?idPersonne=".$data['id']."\">");?>
                                             <i class="icon-remove"></i></a>


                                             <?php echo ("<a  href=\"modifutil.php?idPersonne=".$data['id']."\">"); ?>
                                              <i class="icon-edit">

                                              </i>
                                          </a>
                                      </ul>
                        </tr>
                        <?php
                    }
                    mysqli_free_result ($req);
                    mysqli_close ($con);
                    ?>
                 
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
           
           <div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-plus"></i></div>
                <h5>Ajouter un utilisateur :

                <ul class="nav" style="padding-top: 20px; text-decoration: underline;">
                    <li> <p><a href="ajadmin.php" > Admin</a></p></li>            
                       <li>  <p><a href="ajetudiant.php"> Etudiant </a></p> </li>    <li> <p><a href="ajenseignant.php"> Enseignant </a></p></li>
             </ul></h5>
             
    </header>




</div>
</div>
</div>
</div>

</div>

</div>
</div>
   <!-- FOOTER -->
   <div id="footer">
    <p>&copy;  ESSAT &nbsp;2018 &nbsp;</p>
</div>
</body>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
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

