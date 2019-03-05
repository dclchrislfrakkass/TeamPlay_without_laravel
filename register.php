<?php 
    include 'inc/top.php';
    include 'inc/navbar.php';
    require_once 'work/pdo.php';
 ?>

<?php
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

                if ($membre) {
                    echo 'Ce nom est déjà utilisé !';
                    
                } else {
                    // Insertion dans la base de donnée
                    $creationUtilisateur = $bd->prepare("INSERT INTO users SET name = :username, email = :email, password = :password, idRole = '2'");
                    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $creationUtilisateur->bindParam(':username', $_POST['username']);
                    $creationUtilisateur->bindParam(':email', $_POST['email']);
                    $creationUtilisateur->bindParam(':password', $password);
                    $creationUtilisateur->execute();
                
                    echo '<br/>';
                    echo '<br/>';
                    echo $username. " a bien été enregistré !";
                }

            }
            
        }
        else echo "Le mot de passe est trop court !";
    }
    else echo "Veuillez saisir tous les champs !";
}

?>
</div>
<?php include 'inc/footer.php' ?>