<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<a class="navbar-brand" href="#">Team Play</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse navbar-dark bg-dark" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto ">
    <li class="nav-item">
        <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
    </li>

    <script>
    $(document).ready(function(){
    $(".btn1 nav-link").click(function(){
        alert("The paragraph was clicked.");
        // $(".base").append(" <b>Appended text</b>.");
    });
    </script>

    <li class="nav-item">
        <a class="btn1 nav-link" href="#">A propos</a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
    </li> -->
    <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Désactivé</a> -->
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Divers</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
  
        <!-- <a class="dropdown-item" href="/messages">Messages</a> -->
        <a class="dropdown-item" href="#">Equipe</a>
        <a class="dropdown-item" href="#">Autre</a>
        </div>
    </li>
    <li> 
    
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="rechercher" aria-label="Search">
    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
      
    
            <li class="nav-item">
                <a class="nav-link" href="">{{ __('Login') }}</a>
            </li>
     
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Register') }}</a>
                </li>
       
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href=""></a>

                    <form id="logout-form" action="" method="POST" style="display: none;">
                        
                    </form>
                </div>
            </li>
       
    </ul>
</div>
</nav>