<?php
// on se connecte à notre base
require'db.php';
session_start();
// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
$sql = "SELECT * FROM departement Order BY id_dep";

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
    <title>Département | Gestion des emplois de temps</title>
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
                           <h4> Listes des département</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           <th>Nom de département</th>
                                        <th>Chef département</th>
                                        
                                        <th>nom class</th>
                                        <th>Enseignant</th>
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
                                   $id_dep=$data['id_dep'];
                                   ?>
<td name="nom_dep"><?php echo $data['nom_dep']; ?></td>
<td name="chef_departement"><?php echo $data['chef_departement']; ?></td>
<td name="nom_class"><?php echo $data['nom_class'];?></td>
<td name="nom_enseignant"><?php echo $data['nom_enseignant'];?></td>
                                   <td name="nomdbredheure">

<div class="toolbar">

<ul class="nav">
  <?php echo ("<a  onclick=\"return confirm(' Vous etes sur ?')\" href=\"deldep.php?iddep=".$data['id_dep']."\">");?>
<i class="icon-remove"></i></a>
<?php echo ("<a  href=\"modifdep.php?iddep=".$data['id_dep']."\">"); ?>
<i class="icon-edit"></i></a></ul> </td>
                          
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
                <h5>Ajouter un département</h5>
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
                <form class="form-horizontal" id="ajoutmat" action="ajdept.php" method="POST">
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                            <input type="text" name="nom_dep" placeholder="Nom de département :" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-push-4">
                            <input type="text" name="chef_departement" placeholder="Chef département :" class="form-control" />
                        </div>
                    </div>
                    

  <div class="row">
        <div class="col-lg-12">
            <div class="box dark">
                <header>
                    <div class="icons"><i class="icon-plus"></i></div>
                    <h5>Ajouter un class</h5>
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
                    <form class="form-horizontal" id="ajoutmat" action="ajdept.php" method="POST">
                        <!-- <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <input type="text" name="nom_dep" placeholder="Nom de département :" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <input type="text" name="chef_departement" placeholder="Nom de chef département :" class="form-control" />
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <input type="text" name="nom_class" placeholder="Nom de class :" class="form-control" />
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="col-lg-8 col-lg-push-4">
                                <input type="text" name="nom_salle" placeholder="Chef département :" class="form-control" />
                            </div>
                        </div> -->
                        
                       <div class="form-group">
                <div class="col-lg-8 col-lg-push-4">
                  <select name="nom_enseignant" class="form-control" onchange="afficher(this.value)">
                            <option >choisir votre Enseignant</option>
                       


<?php
require"db.php";
$res=mysqli_query($con,"select * from ens  ");
while ($r=mysqli_fetch_array($res,MYSQLI_NUM))
{ echo '<option>'.$r[1].'</option>' ; }
?> </select> 
                  </div>                
                </div>

                        <!-- <div class="form-group" >
                            <div class="col-lg-4 col-lg-push-8">
                                <input type="submit" name="valider" id="btnvalider" value="Valider" class="btn col-lg-10 col-lg-push-2 btn-primary  " />
                            </div></div> -->

<div class="form-group" >
                            <div class="col-lg-4 col-lg-push-8">
                    
                        <div class="panel-body">
                            <input  class="btn col-lg-10 col-lg-push-2 btn-primary" value="Valider" " data-toggle="modal" data-target="#myModal"/>
                             
                           
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            
                                        </div>
                                        <div class="modal-body">
                                               <div class="col-lg-10">
                                            Veuiller vraiment ajouter cetter département?
                                        </div></div>
                                        <div class="modal-footer">
                                             <div class="col-lg-10">
                                            <input  name="valider" id="btnvalider" value="Close" class="btn col-lg-4 btn-primary  "  class="btn btn-default" data-dismiss="modal"/>
                                            <input type="submit" name="valider" id="btnvalider" value="Valider" class="btn col-lg-4 btn-primary  "/></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- Debut ajout class-->
  


    <!--fin Ajout class  -->


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
