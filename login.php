<?php $title = 'login'; ?>

<?php ob_start(); ?>
<main role="main">

<?php
    require_once 'work/pdo.php';
  
if(session_status() == PHP_SESSION_NONE) {

    if(isset($_POST['login_button'])) {

        /* on test si les champ sont bien remplis */
        if(!empty($_POST['username']) and !empty($_POST['password']))
        {
            echo "<br/><br/><br/>";
            echo "je rentre ici !";
            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));
            // var_dump($username);
            // var_dump($password);
            $connect = $bd->prepare("SELECT * FROM users WHERE name = :name");
            $connect->bindParam(':name', $username);
            $connect->execute();
            $user = $connect->fetch();
            echo "<br/><br/><br/>";
            echo "<br/><br/><br/>";
            // echo "var dump de user après select : <br/>";
            // var_dump($user);
           

        /* On test si le MDP est rentré, et si les deux MDP ne sont pas différent */
        // $isPasswordCorrect = password_verify($_POST['password'], $user->password);

            if (!$user)
            {
                echo "<br/><br/><br/>";
                echo "<br/><br/><br/>";
                // echo "var dump de user si pas bon : <br/>";
                // var_dump($user);
                echo 'Mauvais identifiant ou mot de passe !';
            }
            else
            {
                if (password_verify($_POST['password'], $user->password)) {
                    session_start();
                    
                    $_SESSION['auth'] = $user;
                    $_SESSION['flash']['success'] = 'Vous etes maintenant bien connecté';
                    $idMembre = $user->id;
                    $pseudoMembre = $user->name;
                    $user = $_SESSION['auth']->name;
                    /**
                     * Création du cookie teamplay, pseudo  et id du membre qui reste un an est httpOnly qui sécurise
                     * contre le javascript
                     */

                    setcookie('pseudo', $user, time()+ 365*24*3600, null, null, false, true);
                    setcookie('id', $idMembre, time()+ 365*24*3600, null, null, false, true);
                    // echo "<br/><br/><br/>";
                    // echo "print_r de session : <br/><br/>";
                    // print_r ($_SESSION);
                    
                    // echo "<br/><br/><br/>";
                    // var_dump($_SESSION['auth']->name);
                    // echo "<br/><br/><br/>";
                    // echo "var dump de user si c'est bon : <br/>";
                    // var_dump($user);
                    // echo "var dump de session auth si c'est bon : <br/>";
                    header('Location: index.php');
                    exit();
                } else {
                    echo 'Mauvais identifiant ou mot de passe !';
                }
            }
        }
    }
}

// echo "<br/><br/><br/>";
// var_dump($_SESSION['auth']);
// echo "<br/><br/><br/>";
// var_dump($user);
// echo '<br><br>';
// echo $idMembre;
// echo '<br><br>';
// echo $pseudoMembre;
// echo '<br><br>';
// var_dump($idMembre);

?>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>