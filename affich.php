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
      
      xmlhttp.open("GET","ajmat.php?class="+str,true);
      xmlhttp.send();
  
    }
  }
  
  </script>
    



<!DOCTYPE html>
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
   <div id="wrap">


       <!-- HEADER SECTION -->
       <div id="top">

        <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
            <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                <i class="icon-align-justify"></i>
            </a>


        </nav>

    </div>
    <!-- END HEADER SECTION -->
<!-- <div id="datePickerBlock" class="body collapse in">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-lg-4" for="dp1">Field with the format specified via
                            options</label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control" value="02-16-2012" id="dp1" />
                        </div>
                    </div>
                   
                    
                    
                    
                </form>
            </div>

 -->
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

    <div class="inner">
        <div class="row">
            <div class="col-lg-12">


                <h2> Emploi de temps </h2>



            </div>
        </div>

        <hr />


        <div class="row">
            <div class="col-lg-12">
              
                        <div class="form-group">
                   
                        
                       
<table>
<td>  <select name="nom_dep" class="form-control" onchange="afficher(this.value)">
<option>choisi une classe</option> 
<?php
$con=mysqli_connect("localhost","root","","emplois");
$res=mysqli_query($con,"select * from seance");
while ($r=mysqli_fetch_array($res,MYSQLI_NUM))
{ echo '<option>'.$r[2].'</option>
' ; }
   mysqli_free_result ($res);
                    mysqli_close ($con);
?> 
</select>
 </td>
  </tr> 
</table>
<div id="result">  </div>
                    </div>
 
                    </div>
                </div>

            </div>

        </div>

    </div>


</div> 



</div>




</div>
<!--END PAGE CONTENT -->


</div>

<!--END MAIN WRAPPER -->

<!-- FOOTER -->
<div id="footer">
    <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
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
            $(function () { formInit(); });
        </script>
        
<!-- <script>
   $(document).ready(function () {
       $('#dataTables-example').dataTable();
   });
</script> -->
<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->
</html>