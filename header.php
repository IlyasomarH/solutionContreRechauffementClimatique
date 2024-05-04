<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


<?php  if($_SERVER['PHP_SELF']!=='/solutionContreRechauffementClimat/login.php'){  ?>


    <header>
        <div class="logo">


      

        </div>
        <nav>

      
    
            <a href="index.php" class="active">acceuil</a>


         
            <?php   if(internauteEstConnecte())  {    ?>

    
                        <a href="infos.php">actualité</a>
                        

                        <a href="quiz.php">Quiz</a>
                        <a href="avis.php">Avis</a>
                        <a href="commentaire.php">commentaire</a>
                        <a href="login.php?action=deconnexion">deconnexion</a>
            <?php  } else{

             ?>

                <a href="Inscription.php">S'inscrire</a>
                <a href="login.php">connexion</a>






              <?php  }  ?>  





        
           


    






        
    </nav>





    </header>




    <?php }   ?>

   