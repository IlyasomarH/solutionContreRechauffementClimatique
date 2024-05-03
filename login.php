


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
    $resultat = executeRequete("SELECT * FROM utlisateur WHERE mail='$_POST[mail]'");
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


      <form method="POST" action="login.php">
        <input type="email" name="mail"  placeholder="saisir votre email" required>

        <input type="password" name="mdp" placeholder="saisir pass word " required>
        <button>Se connecter</button>
        </form>


  </div>
  <div class="col">

  </div>



  


</main>


      

<?php
    include_once('footer.php')


?>
