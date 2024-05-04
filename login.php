


<?php
require_once("connection.php");


if(isset($_GET['action']) && $_GET['action'] == "deconnexion") 
{
	session_destroy(); 
}
if(internauteEstConnecte()) 
{
	header("location:index.php");
}

if($_POST)
{
    $resultat = executeRequete("SELECT * FROM utlisateur WHERE email='$_POST[email]'");
    if($resultat->num_rows != 0)
    {
        $membre = $resultat->fetch_assoc();
        if($membre['mdp'] == $_POST['mdp'])
        {
            foreach($membre as $indice => $element)
            {
                if($indice != 'mdp')
                {
                    $_SESSION['User'][$indice] = $element; 
                }
            }
            header("location:index.php"); 
        }
        else
        {
            $contenu = '<div class="erreur">Erreur de MDP</div>';
        }       
    }
    else
    {
        $contenu = '<div class="erreur">Erreur de pseudo</div>';
    }
}













?>













<!-- --------------------------------------------------------------html ---------------------------------->
<?php
    include_once('header.php')


?>




<main class='container'>

<?php
//    print_r($_SESSION['User'])


?>

  <div class="col">


      <form method="POST" action="login.php"  class="shadow w-50 mx-auto p-5 rounded-3">
        <input type="email" name="email" class="label-control"  placeholder="saisir votre email" required>

        <input type="password" name="mdp" class="label-control" placeholder="saisir pass word " required>
        <button class="btn btn-primary">Se connecter</button>
        <a href="inscription.php">S'inscrire</a>
        </form>


  </div>
  <div class="col">

  </div>



  


</main>


      

<?php
    include_once('footer.php')


?>
