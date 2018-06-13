﻿<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
   <meta charset="UTF-8" />
   <title>Emplois | Listes des emplois</title>
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
             

 <div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <!-- <div class="row"> -->
                <!-- <div class="col-lg-12"> -->
                    <div class="box dark">
                        <header>
                          <div id="datePickerBlock" class="body collapse in">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="dp1">Donner la date </label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control" value="02-16-2012" id="dp1" />
                        </div>
                    </div>
                   
                    
                    
                    
                </form>
            </div>

                            <h5>Listes des emplois</h5><br>
 </header>

<table>
<tr><td></td> 
<td> <select class="form-control" onchange="afficher(this.value)">
<option><br>choisi une classe</option> 
<?php
$con=mysqli_connect("localhost","root","","emplois");
$res=mysqli_query($con,"select DISTINCT`nom_dep` from seance");
 if(mysqli_num_rows($res)>0)
while ($r=mysqli_fetch_assoc($res))
{
 echo '<br><option>'.$r['nom_dep'].'</option>' ;
  }
?> </select> </td> </tr> 
</table>
<div id="result"> </div>

                       

                    </div>
                    
<!-- </div>
</div>
</div> -->



<!--TABLE, PANEL, ACCORDION AND MODAL  -->


</div>

</div>

</div>
</div>



  <title>Mise à jour</title>
  <script>
  function afficher(str){ 
  if (str == "choisi une classe") {
    document.getElementById("result").innerHTML = "choisi une classe";
  return;
  } else {
    if (window.XMLHttpRequest) {
      // code for IE7+ ? Firefox , Chrome, Opéra, Safari
      xmlhttp = new XMLHttpRequest();
    
    } else {
      // code for IE6 , IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
      xmlhttp.onreadystatechange=function(){
        if ( this.readyState == 4 && this.status == 200 ) {
          document.getElementById("result").innerHTML=this.responseText;

        }
      };
      
      xmlhttp.open("GET","colemploi.php?class="+str,true);
      xmlhttp.send();
  
    }
  }
  
  </script>
  




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
</html><!--END MAIN WRAPPER -->
