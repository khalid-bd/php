    <?php
    require('contents.php');
    // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
    session_start ();

    // On récupère nos variables de session
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

    // On teste pour voir si nos variables ont bien été enregistrées
        //echo '<html>';
        //echo '<head>';
        //echo '<title>Page de notre section membre</title>';
        //echo '</head>';

        //echo '<body>';
        echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
        //echo '<br />';

        // On affiche un lien pour fermer notre session
        //echo '<a href="./logout.php">Déconnection</a>';

            // var_dump( $contents);
        foreach($contents as $key => $value)
        {

 //           foreach($value as $K=>$V) {
                ?>
                <h1> <?php echo $value['auteur']; ?></h1>
                <h3> <?php echo $value['titre'];  ?></h3>
                <p> <?php echo $value['description']; ?>  </p>
                <?php            
            }   
        }



    
    else {
        echo 'Les variables ne sont pas déclarées.';
    }
    ?>