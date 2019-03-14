<?php
// session_start(); 
if (isset($_SESSION)){
    // echo '<br/><br/>';
    // print_r['auth'];
    // $user = $_SESSION['auth']->name;}
}
// $_SESSION['name'] = $pseudoMembre;
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="">TeamPlay</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">A propos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#">Contact</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
        <a class="dropdown-item" href="#">Overwatch</a>
        <a class="dropdown-item" href="#">Diablo III</a>
        <a class="dropdown-item" href="#">Apex Legend</a>
        </div>
    </li>
    <?php
    if(isset($_SESSION['auth'])) {
        if ($_SESSION['auth']->idRole == "1") {
        ?>
        <li class="nav-item">
            <a class="nav-link" href="gest.php">Gestion</a>
        </li>
        <?php
        }
    }
    ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <?php

    if (isset ($_SESSION['auth'])){
        // echo $_SESSION['auth']->name;
        
         ?>
         <a class="btn btn-outline-info mr-2" name="logout" id="logout" href="logout.php" role="button">Se déconnecter</a>
      
    
    <?php

    } else {
        ?>
        <button type="button" name="login" id="login" class="btn btn-outline-info mr-2" data-toggle="modal" data-target="#loginModal">Connexion</button>
        <button type="button" name="register" id="register" class="btn btn-outline-warning mr-5" data-toggle="modal"     data-target="#registerModal">Inscription</button>
        <?php
    }
    ?>

    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
</div>
</nav>