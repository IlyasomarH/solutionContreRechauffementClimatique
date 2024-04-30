
<?php
    include_once('header.php')


?>


<form method="POST" action="form.php">
        <p align="center"> gestion d'utlisateur</p>
      
        <table >
          <tr>
            <td >Numero de telephone :</td> </tr>
            <br><tr><td ><input type="INT" name="identifiant" size="35" placeholder="votre numero"></td>
            
          </tr>
          <tr>
            <td >Nom :</td> </tr>
           <br> <tr><td ><input type="text" name="nom" size="35" placeholder="votre nom"></td>
          </tr>
           <tr>
            <td >email :</td></tr>
           <br> </tr><td ><input type="text" name="email" size="35" placeholder="votre email"></td>
          </tr>
          <center> <tr>
            <td ><input type="reset" value="Annuler"> <input type="submit" value="Envoyer"></td>

          </tr></center>
        </table>
      </div>
      </form>



      

<?php
    include_once('footer.php')


?>
