
 <div class="col-lg-12">
    
       

<table>
<tr><td></td> 
<td> <select class="form-control" onchange="afficher(this.value)">
<option><br>Choisir un date exact</option> 
<?php
$c=$_GET['semaine'];

$con=mysqli_connect("localhost","root","","emplois");
$res=mysqli_query($con,"select DISTINCT* from seance where semaine='$c'");
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





  <title>Mise à jour</title>
  <script>
  function afficher(str){ 
  if (str == "Choisir un date exact") {
    document.getElementById("result").innerHTML = "Choisir un date exact";
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
      
      xmlhttp.open("GET","colhistorique.php?class="+str,true);
      xmlhttp.send();
  
    }
  }
  
  </script>
  

