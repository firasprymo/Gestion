 <?php 
 require"db.php";
 session_start();
 // $id_seance=$_POST['id_seance'];
 $sql = "SELECT * from seance where dat_debut='08.10 - 09.40'";
$req=mysqli_query($con,$sql) or die();

 if ($result=mysqli_fetch_assoc($req)){
?>
  <script>
  function afficher(str){ 
  if (str == "choisir le nom de matiére ") {
    document.getElementById("result").innerHTML = "choisir un id valide";
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
      
      xmlhttp.open("GET","ajaxmat.php?nom="+str,true);
      xmlhttp.send();
  
    }
  }
  
  </script>
  
 </head>
<body>
<table>
<tr><td><label> choisir votre id </label></td> 
<td> <select onchange="afficher(this.value)">
<option>choisir numero de id</option> 
<?php
$con=mysqli_connect("localhost","root","","emplois"); ;
$res=mysqli_query($con,"select * from matiere");
while ($r=mysqli_fetch_array($res,MYSQLI_NUM))
{ echo '<option>'.$r[1].'</option>' ; }
?> </select> </td> </tr> 
</table>
<div id="result"> les informations seront listées içi </div>

 <table name="insertion" class="form-horizontal" id="ajoutmat" action="modifmat2.php" method="POST">
                    <input type="hidden" name="id_matiere" value="<?php echo ($id_matiere);?>">
                    <tr class="form-group">
                      <label for="text2" class="control-label  col-lg-4">Nom matiére</label>

                      <tr class="col-lg-8">

                        <input type="text" name="nom_matiere" placeholder="" class="form-control"  value="<?php echo($result['nom_matiere'])."   ".($result['nom_enseignant']) ;?>" />
                    </tr>
                </tr>

                <tr class="form-group">
                 <label for="text2" class="control-label  col-lg-4">Class</label>

                 <tr class="col-lg-8 ">
                    <input type="text" name="nom_class" placeholder="" class="form-control" value="<?php echo($result['nom_class']) ;?>"/>
                </tr>
            </tr>
            <tr class="form-group">
                 <label for="text2" class="control-label  col-lg-4">Enseignant</label>

                 <tr class="col-lg-8 ">
                    <input type="text" name="nom_enseignant" placeholder="" class="form-control" value="<?php echo($result['nom_enseignant']) ;?>"/>
                </tr>
            </tr>
            
            <tr class="form-group">
              <label for="text2" class="control-label  col-lg-4">Nombre des heures :</label>

              <tr class="col-lg-8 ">
                <input type="text" name="nombredheure" placeholder="" class="form-control"  value="<?php echo($result['nombredheure']) ;?>"/>
            </tr>
        </tr>
        <tr class="form-group">
         <label for="text2" class="control-label  col-lg-4">Nombre des séances :</label>

         <tr class="col-lg-8 ">
            <input type="text" name="nombredeseance"  placeholder="" class="form-control"  value="<?php echo($result['nombredeseance']) ;?>"/>
        </tr>
    </tr>



    <tr class="form-group">
      <label for="text2" class="control-label  col-lg-4">Coefficient:</label>

      <tr class="col-lg-8 ">

        <input type="text"  name="coef" placeholder="" class="form-control"  value="<?php echo($result['coef']) ;?>"/>
    </tr>
}
</tr>
 
                        <!-- <tr class="form-group">
                           <label for="text2" class="control-label col-lg-4">With Placeholder</label>

                            <tr class="col-lg-8 ">
                                <input type="password" id="text2" placeholder="Mot de passe" name="password" class="form-control" />
                            </tr>
                        </tr> -->


                        <tr class="form-group" >
                            <tr class="col-lg-4 col-lg-push-8">
                                <input type="submit" name="valider" id="btnvalider" value="Valider" class="btn col-lg-10 col-lg-push-2 btn-primary  " />
                            </tr>
                        </tr>



                        </table>
 <?php }?>
