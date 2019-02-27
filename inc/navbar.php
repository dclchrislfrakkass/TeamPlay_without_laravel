<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">TeamPlay</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="indexView.php">Accueil <span class="sr-only">(current)</span></a>
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
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Action 2</a>
        <a class="dropdown-item" href="#">Action 3</a>
        </div>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <button type="button" name="login" id="login" class="btn btn-outline-info mr-2" data-toggle="modal" data-target="#loginModal">Connexion</button>  
        <button type="button" name="register" id="register" class="btn btn-outline-warning mr-5" data-toggle="modal" data-target="#registerModal">Inscription</button>
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
</div>
</nav>