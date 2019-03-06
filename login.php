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
            echo "<br/><br/><br/>";
            echo "<br/><br/><br/>";
            var_dump($user);

        /* On test si le MDP est rentré, et si les deux MDP ne sont pas différent */
        // $isPasswordCorrect = password_verify($_POST['password'], $user->password);

            if (password_verify($_POST['password'], $user->password)) {
                
                $_SESSION['auth'] = $user;
                $_SESSION['flash']['success'] = 'Vous etes maintenant bien connecté';
                $idMembre = $user->id;
                $pseudoMembre = $user->name;
                // header('Location: onestlog.php');
                echo "<br/><br/><br/>";
                echo 'Je suis passé ici !';
                echo "<br/><br/><br/>";
                var_dump($user);
                session_start();
                var_dump($_SESSION['auth']);
            } else {
                echo 'Mauvais identifiant ou mot de passe !';
            }
        }
    }
}

echo "<br/><br/><br/>";
var_dump($_SESSION['auth']);
echo "<br/><br/><br/>";
var_dump($user);
echo '<br><br>';
echo $idMembre;
echo '<br><br>';
echo $pseudoMembre;
echo '<br><br>';
var_dump($idMembre);
?>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>