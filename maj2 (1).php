<html>
<head>
	<title>Mise à jour</title>
	<script>
	function afficher(str){ 
	if (str == "choisir numero de id") {
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
			
			xmlhttp.open("GET","index.php?id="+str,true);
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
{ echo '<option>'.$r[0].'</option>' ; }
?> </select> </td> </tr> 
</table>
<div id="result"> les informations seront listées içi </div>

</body>
</html>