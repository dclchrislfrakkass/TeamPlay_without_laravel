<?php 
    include 'inc/top.php';
    include 'inc/navbar.php';
    require_once 'work/pdo.php';

if(session_status() == PHP_SESSION_NONE) {

    if(isset($_POST['login_button'])) {

        /* on test si les champ sont bien remplis */
        if(!empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['repeatPassword']))
        {
            
            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));
            $repeatPassword = htmlspecialchars(trim($_POST['repeatPassword']));
            var_dump($username);
            var_dump($password);
            var_dump($repeatPassword);

        /* On test si le MDP est rentré, et si les deux MDP ne sont pas différent */
            if (empty($_POST['password']) || $_POST['password'] != $_POST['repeatPassword'])
            {
                $errors['pass'] = "Vous devez rentrer un mot de passe valide";
            } else {
                $connect = $bd->prepare("SELECT * FROM users WHERE name = :name");
                $connect->bindParam(':name', $username);
                $connect->execute();
                $user = $connect->fetch();
                session_start();

                $_SESSION['auth'] = $user;
                $_SESSION['flash']['success'] = 'Vous etes maintenant bien connecté';
                header('Location: index.php');
            }
        }
    }
}