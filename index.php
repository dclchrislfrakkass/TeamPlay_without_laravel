
<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
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
                        <form method="post" action="login.php">
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
                        <form method="post" action="register.php">
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

       
    </div>  
  

       <div class="col-5 col-md-3 col-lg-3">

        <?php include 'inc/sidebar.php'; ?>

        </div>
    </div>


    </div>
</main>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>