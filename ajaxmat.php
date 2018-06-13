<html>
<head> </head>
<body>
   

   
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

<table>
<tr><td><label> choisir votre id </label></td> 
<td> <select onchange="afficher(this.value)">
<option>choisir numero de id</option> 
<?php
$con=mysqli_connect("localhost","root","","emplois"); ;
$res=mysqli_query($con,"select * from seance");
while ($r=mysqli_fetch_array($res,MYSQLI_NUM))
{ echo '<option>'.$r[1].'</option>' ; }{ echo '<option>'.$r[2].'</option>' ; }{ echo '<option>'.$r[3].'</option>' ; }
?> 
</select> </td> </tr> 
</table>
<div id="result"> les informations seront listées içi </div>


</html>
<form method="POST" action="emploi.php">
<?php 
$nom=$_GET["nom"];
$con=mysqli_connect("localhost","root","","emplois");
$res=mysqli_query($con,"select * from matiere where nom_matiere='$nom'");
if($r=mysqli_fetch_array($res)){
	?>
	<table>
	<tr><td><label>Votre nom</label></td> 
	<td><input type="text" name="nom" id="nom" value="<?php echo $r[1]; ?>" /> </td>
    </tr>	
		<tr><td><label>Votre nomens</label></td> 
		<td><input type="text" name="nomens" id="nomens" value="<?php echo $r[2]; ?>" /> </td>
    </tr>
	<tr><td><label>classe</label></td> 	
		<td><input type="text" name="classe" id="classe" value="<?php echo $r[3]; ?>" /> </td>
    </tr>
    <tr><td><label>groupe</label></td> 	
		<td><input type="text" name="groupe" id="groupe" value="<?php echo $r[4]; ?>" /> </td>
    </tr>
	

<tr><td>
		<input type="submit" name="modif" id="modif" value="Modifier"/> </td>
		<td>
		<input type="submit" name="supp" id="supp" value="Supprimer"/> </td>
    </tr>
</table>

<?php } ?> 

<!-- <input type="text" id="nom" name="nom" value="<?php echo $_GET["nom"] ; ?>" /> -->
</form>




            <head id="modifmat">
    
   <!--  <script>
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
     -->
 </head>

<table>
<tr><td><label> choisir le nom de matiére</label></td> 
<td> <select onchange="afficher(this.value)">
<option>choisir le nom de matiére</option> 
<?php
$con=mysqli_connect("localhost","root","","emplois"); ;
$res=mysqli_query($con,"select * from seance");
while ($r=mysqli_fetch_array($res,MYSQLI_NUM))
{ echo '<option>'.$r[1].'</option>' ; }
?> </select> </td> </tr> 
</table>
<div id="result"> les informations seront listées içi </div>
</body>
</html>