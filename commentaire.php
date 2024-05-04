<?php
    include_once('connection.php');
    if(isset($_GET['action']) && $_GET['action'] == "deconnexion") 
    {
        print_r($_GET['action']);
        session_destroy(); 
    }

?>


<?php
    include_once('header.php')
    

?>




<main>





<table class='commente'>
    <tr>
        <th>Nom</th>
        <th>Avis</th>
       

            <th>Action</th>


   
    </tr>


                    <?php
                        // Effectuer la connexion à la Base de Données
                        $serverName = "localhost";       // serveur local
                        $userName = "root";   // administrateur de la base
                        $password = "";           // mot de passe de l'administrateur
                        $dbName = "gestionutilisateur";   // nom de la base
                        $connexion = mysqli_connect($serverName, $userName, $password, $dbName);
                        if ($connexion) {
                        
                        // Effectuer la requête
                        $query = "SELECT * FROM opinions ";
                        $result = mysqli_query($connexion, $query);
                     // Afficher les lignes du tableau en fonction de la réponse à la requête
                        if ($result) {
                            if (mysqli_num_rows($result) > 0) {

                                // if($_SESSION['email']=='nimaH5828@gmail.com') {
                                // while($row = mysqli_fetch_assoc($result)) {
                                //     echo "<tr><td>".$row["nom"]."</td><td>".$row["avis"]."</td>     <td class='btn'> <button class='supp'>Supprimer   </button>    <button class='edit'>Modifier   </button>     </td></tr>\n";
                                //    }
                                //   }
                                //   else{

                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td>".$row["nom"]."</td><td>".$row["avis"]."</td>  <td class='btn'> <button class='supp'>Supprimer   </button>    <button class='edit'>Modifier   </button>     </td> </tr>\n";

                                    }
                                //   }

                                }
                                 
                                 // Fermer la connexion
                                 mysqli_close($connexion);
                                }}
                                ?>
            
               
   
    
</table>


          
    











 


</main>


<?php
    include_once('footer.php')


?>
