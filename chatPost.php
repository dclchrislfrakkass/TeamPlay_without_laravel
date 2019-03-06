


<?php
session_start(); 
if (isset($_SESSION)){
$user = $_SESSION['auth']->name;};
require_once 'work/pdo.php';
// Connexion à la base de données
// try
// {
//     $bdd = new PDO('mysql:host=localhost;dbname=teamplay;charset=utf8', 'root', 'doberman');
// }
// catch(Exception $e)
// {
//         die('Erreur : '.$e->getMessage());
// }

// Insertion du message à l'aide d'une requête préparée
$req = $bd->prepare('INSERT INTO chat SET pseudo = :username, message = :message');
$req->bindParam('username', $user);
$req->bindParam(':message', $_POST['message']);
$req->execute();

$req->closeCursor();

// Redirection du visiteur vers la page du minichat
header('Location: index.php');
?>