


<?php
require_once("connection.php");


if($_POST)
{
	debug($_POST);
	$verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['nom']); 
	if(!$verif_caractere || strlen($_POST['nom']) < 1 || strlen($_POST['nom']) > 20 )
	{
		$contenu .= "<div class='erreur'>Le nom doit contenir entre 1 et 20 caractéres. <br> Caractére accepté : Lettre de A é Z et chiffre de 0 é 9</div>";
	}
	if(empty($contenu)) 
	{
		$membre = executeRequete("SELECT * FROM utlisateur WHERE email='$_POST[email]'"); 
		if($membre->num_rows > 0)
		{
			$contenu .= "<div class='erreur'>nom indisponible. Veuillez en choisir un autre svp.</div>";
		}
		else
		{
			foreach($_POST as $indice => $valeur)
			{
				$_POST[$indice] = htmlEntities(addSlashes($valeur));
			}
			executeRequete("INSERT INTO utlisateur (nom,email,mdp) VALUES ('$_POST[nom]',  '$_POST[email]', '$_POST[mdp]')");
			$contenu .= "<div class='validation'>Vous étes inscrit à notre site web. <a href=\"login.php\"><u>Cliquez ici pour vous connecter</u></a></div>";
		}
	}
}
?>


<!-- --------------------------------------------------------------html ---------------------------------->
<?php
    include_once('header.php')


?>






<?php echo $contenu; ?>

<form method="post" action="" class="shadow w-50 mx-auto p-5 rounded-3">
	<h2 class="text-center text-primary">formulaire d'inscription </h2>
	<label for="nom" class="label-control">Nom</label><br>
    <input class="form-control"  type="text" id="nom" name="nom" placeholder="votre nom"><br><br>
     
    <label for="email" class="label-control">Email</label><br>
    <input  class="form-control" type="email" id="email" name="email" placeholder="exemple@gmail.com"><br><br>
            
    <label for="mdp" class="label-control">Mot de passe</label><br>
    <input  class="form-control" type="password" id="mdp" name="mdp" required="required"><br><br>

	<label for="mdp" class="label-control">re-saisir le Mot de passe</label><br>
    <input  class="form-control" type="password" id="mdp" name="mdp" required="required"><br><br>
        
    
 
    <input  class="btn btn-outline-primary w-25" name="inscription" value="S'inscrire" type="submit">
	<input  class="btn btn-outline-danger w-25" name="inscription" value="Annuler" type="submit">
</form>
 

<?php
    include_once('footer.php')


?>
