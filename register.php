<?php include 'inc/top.php' ?>
<?php include 'inc/navbar.php' ?>
<?php



if (isset($_POST['submit']))
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
            /* on test si les deux mdp sont bien identique */
            if ($_POST['password']==$_POST['repeatPassword'])
            {
                // On crypte le mot de passe
                $hPass= password_hash($_POST['password'], PASSWORD_DEFAULT);
                // on se connecte à MySQL et on sélectionne la base
                $c = new mysqli('localhost','teamplay', 'chrisfab', 'teamplay');
                /* Vérification de la connexion */
                //On créé la requête
                var_dump($sql);
                $sql = "INSERT INTO users (name, email, password, role) VALUES ('$pseudo', '$email', '$hPass', '0')";
                 
                /* execute et affiche l'erreur mysql si elle se produit */
                if(!$c->query($sql))
                {
                    printf("Message d'erreur : %s\n", $c->error);
                }
            // on ferme la connexion
            mysqli_close($c);
            echo '<br/>';
            echo '<br/>';
            echo $pseudo. " a bien été enregistré !";
            }
            else echo "Les mots de passe ne sont pas identiques";
        }
        else echo "Le mot de passe est trop court !";
    }
    else echo "Veuillez saisir tous les champs !";
}

?>
</div>
<?php include 'inc/footer.php' ?>