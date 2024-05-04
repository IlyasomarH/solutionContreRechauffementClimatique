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





</main>








<?php
    include_once('footer.php')


?>
