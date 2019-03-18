<?php
// session_start(); 
// if (session_start()){
//     echo '<br/><br/>';
//     // var_dump($_SESSION);
//     // $user = $_SESSION['auth']->name;
// }
require_once './work/pdo.php';

?>

    <div class="card card-body bg-light"> <!--attribut la class à la navbar -->
    <form action="../chatPost.php" method="post">
                <p>
                <h3>Discussion</h3>
                <?php 
                if (isset ($_COOKIE['pseudo'])){ 
                    $user = $_COOKIE['pseudo'];
                    ?>
                    <div class="bg-success mr-5"><?php echo $user; ?></div>
                    
                    <input id="pseudo" name="pseudo" type="hidden" value="<?php echo $user ?>"><br />
                    
                    <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

                    <input type="submit" value="Envoyer" />
                    </p>
                    </form>
                    <?php
                } else {
                    ?>
                    <p>Vous devez être connecté pour parler</p>
                    <?php
                }
        // Connexion à la base de données
        // try
        // {
        //     $bdd = new PDO('mysql:host=localhost;dbname=teamplay;charset=utf8', 'root', 'doberman');
        // }
        // catch(Exception $e)
        // {
        //         die('Erreur : '.$e->getMessage());
        // }

        // Affichage des 5 derniers messages
        $reponse = $bd->prepare('SELECT * FROM chat ORDER BY ID DESC LIMIT 0, 5');
        $reponse->execute();
        while ($donnees = $reponse->fetch())
        {
            // print_r($_SESSION);
            // print_r($donnees);
            echo '<p><strong>' . $donnees->pseudo . '</strong> (' . $donnees->datePost .    '): ' . $donnees->message . '</p>';
        }

        $reponse->closeCursor();

        ?>
    </div>