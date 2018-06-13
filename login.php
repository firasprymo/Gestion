<?php 
/* Main page with two forms: Inscription and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Gestion des emplois du temp</title>
  <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login (2).php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>
  <div class="form">
     <!--  
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Inscription</a></li>
        <li class="tab active"><a href="#login">Connexion</a>
        <!-- </li>
      </ul> --> 
      
      <div class="tab-content">

         <div id="login">   
          <!-- <h1>Bienvenue!</h1> -->
          
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
 <label>
              Veuillez choisir votre role : admin, enseignant,etudiant <span class="req">*</span>
            </label>
            <input type="text" required autocomplete="on" name="post"/>
          </div>
                        
                      <!--   <select name="post_util" id="post_util" class="field-wrap form-control">
                            <option >Choisir votre post</option>
                            <option value="admin">admin</option>
                            <option value="etudiant">etudiant</option>
                            <option value="enseignant">enseignant</option>
                            <option value="administration">administration</option>
                        </select> -->
                </div>
              <div class="field-wrap">
            <label>
              Adresse email<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="on" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Mot de passe<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="of" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Mot de passe oublié?</a></p>

              <button class="button button-block" name="login" />Valider</button>
          </form>

        </div>
          
        <div id="signup">   
          <h1></h1>
          
          <!-- <form action="login.php" method="post" autocomplete="on">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Prénom<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="on" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Nom<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="on" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Adresse email<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="on" name='email' />
          </div>
              <div class="field-wrap">
            <label>
              Post<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="on" name='post' />
          </div>
          
          <div class="field-wrap">
            <label>
              Mot de passe<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="on" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Enregistrer</button>
          
          </form> -->

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
