<?php

$title = 'Accueil';
ob_start(); ?>
<main role="main">



<?php include 'inc/carousel.php'; ?>
<!-- <div class="jumbotron">
    <div class="container">
    <h1 class="display-3">Bienvenue sur TeamPlay</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero mollitia voluptatem odio maxime, ipsa nesciunt, dolore voluptates voluptatibus perferendis quae provident vel distinctio accusamus cum corrupti. Perspiciatis fuga tenetur reiciendis.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">en savoir plus <i class="fas fa-forward"></i></a></p>
    </div>
</div> -->
<div class="row">
    <div class="col-7 col-md-9 col-lg-9">
  
    <!-- @include('inc.messages') affiche les messages d'erreur -->
      


<!-- <div class="container"> -->
    <!-- Example row of columns -->
        <div class="row ml-5">
            <div class="col-md-5 mt-5 ml-5">
                <h2>Titre</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
               <p><a class="btn btn-secondary" href="#" role="button">Plus <i class="fas fa-forward"></i></a></p>
            </div>
                <div class="col-md-5 mt-5 ml-5">
                <h2>Titre</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Plus <i class="fas fa-forward"></i></a></p>
            </div>
         </div>

    <!-- <hr> -->
</div> 
<div id="loginModal" class="modal fade" role="dialog">  
        <div class="modal-dialog">  
    <!-- Modal content-->  
            <div class="modal-content">  
                    <div class="modal-header">  
                        <h4 class="modal-title">Team Play - Connexion</h4>  
                        <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>  
                    </div>  
                    <div class="modal-body">  
                        <form method="post" action="">
                            <label>Pseudo</label>  
                            <input type="text" name="username" id="username" class="form-control" required/>
                            <br/>
                            <label>Mot de passe</label>  
                            <input type="password" name="password" id="password" class="form-control" required/>
                            <br/>
                            <!-- <label>Confirmation du mot de passe</label>  
                            <input type="password" name="repeatPassword" id="repeatPassword" class="form-control" required/>
                            <br/> -->
                            <button type="submit" name="login_button" id="login_button" class="btn btn-warning">Connexion</button>
                        </form>
                    </div>  
            </div>  
            <?php
            // if(session_status() == PHP_SESSION_NONE) {

if(isset($_POST['login_button'])) {

    /* on test si les champ sont bien remplis */
    if(!empty($_POST['username']) and !empty($_POST['password']))
    {

        $username = htmlspecialchars(trim($_POST['username']));
        $password = htmlspecialchars(trim($_POST['password']));
        // $repeatPassword = htmlspecialchars(trim($_POST['repeatPassword']));
        // var_dump($username);
        // var_dump($password);
        // var_dump($repeatPassword);

    /* On test si le MDP est rentré, et si les deux MDP ne sont pas différent */
        if (empty($_POST['password']) || $_POST['password'])
        {
            $errors['pass'] = "Vous devez rentrer un mot de passe valide";
        } else {
            $connect = $bd->prepare("SELECT * FROM users WHERE name = :name");
            $connect->bindParam(':name', $username);
            $connect->execute();
            $user = $connect->fetch();
           
            echo "<script>alert(\"Utilisateur ".$username. " connecté\")</script>";

            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] = 'Vous etes maintenant bien connecté';
            // header('Location: index.php');
            $connect-> closeCursor();
        }
    
}
}?>
        </div>  
    </div>  
    <div id="registerModal" class="modal fade" role="dialog">  
        <div class="modal-dialog">  
    <!-- Modal content-->  
            <div class="modal-content">  
                    <div class="modal-header">  
                        <h4 class="modal-title">Team Play - Inscription</h4>  
                        <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>  
                    </div>  
                    <div class="modal-body">  
                        <form method="post" action="">
                            <label>Pseudo</label>  
                            <input type="text" name="username" id="username" class="form-control" required/>  
                            <br/>  
                            <label>Mail</label>  
                            <input type="email" name="email" id="email" class="form-control" required/>  
                            <br/> 
                            <label>Mot de passe</label>  
                            <input type="password" name="password" id="password" class="form-control" required/>  
                            <br/>  
                            <label>Confirmation du mot de passe</label>  
                            <input type="password" name="repeatPassword" id="repeatPassword" class="form-control" required/>  
                            <br/>  
                            <button type="submit" name="register_button" id="register_button" class="btn btn-warning">Inscription</button>
                        </form>
                    </div>  
            </div>  
            
        </div>  

        <?php require_once 'work/pdo.php'; 

        $errors = array();


        if (isset($_POST['register_button']))
        {

        /* on test si les champ sont bien remplis */
            if(!empty($_POST['username']) and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['repeatPassword']))
            {

                $username = htmlspecialchars(trim($_POST['username']));
                $email = htmlspecialchars(trim($_POST['email']));
                $password = htmlspecialchars(trim($_POST['password']));
                $repeatPassword = htmlspecialchars(trim($_POST['repeatPassword']));


                /* on test si le mdp contient bien au moins 6 caractère */
                if (strlen($_POST['password'])>=6)
                {
                    /* On test si le MDP est rentré, et si les deux MDP ne sont pas différent */
                    if (empty($_POST['password']) || $_POST['password'] != $_POST['repeatPassword'])
                    {
                        $errors['pass'] = "Vous devez rentrer un mot de passe valide";

                    } else {
                        // Vérifie si l'utilisateur n'est pas déjà enregistré
                        $req = $bd->prepare("SELECT name FROM users WHERE name = :username");
                        $req->bindParam(':username', $_POST['username']);
                        $membre = $req->fetch();
                        $req-> closeCursor();

                        if ($membre) {
                            
                            echo '<div class="mx-auto mt-5>';
                            echo 'Ce nom est déjà utilisé !';
                            echo '</div>';
                    
                        } else {
                            // Insertion dans la base de donnée
                            $creationUtilisateur = $bd->prepare("INSERT INTO users SET name = :username, email = :email, password = :password, idRole = '2'");
                            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                            $creationUtilisateur->bindParam(':username', $_POST['username']);
                            $creationUtilisateur->bindParam(':email', $_POST['email']);
                            $creationUtilisateur->bindParam(':password', $password);
                            $creationUtilisateur->execute();
                            
                            echo "<script>alert(\"Utilisateur ".$username. " enregistré\")</script>";
                            // echo '<br/>';
                            // echo '<div class="mx-auto mt-5>';
                            // echo $username. " a bien été enregistré !<br/>";
                            // echo '</div>';
                            $creationUtilisateur-> closeCursor();
                        }

                    }
            
                }
                else echo "<script>alert(\"Le mot de passe est trop court !\")</script>";
            }
            else echo "<script>alert(\"Veuillez saisir tous les champs !\")</script>";
        }

        ?>
        
    </div>  
  

       <div class="col-5 col-md-3 col-lg-3">

        <?php include 'inc/sidebar.php'; ?>

        </div>
    </div>


    </div>
</main>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>