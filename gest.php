
<?php $title = 'Accueil'; 
require_once 'work/pdo.php';
?>

<?php ob_start(); ?>
<main role="main">


<h1 class="mt-5">Bonjour <?php echo $_COOKIE['pseudo']; ?> !</h1>
<div class="membres">
    <h2>Membres enregistrés:</h2>
    <ul>
    <?php
        $req = $bd->query("SELECT * FROM users");
        while ($membre = $req->fetch()){
            // print_r($membre);
            
            echo '<li>id du membre : '. $membre->id . '  nom du membre : '. $membre->name .'  mail : '. $membre->email .'</li>';
        };
        ?>
    </ul>
</div>





</main>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>