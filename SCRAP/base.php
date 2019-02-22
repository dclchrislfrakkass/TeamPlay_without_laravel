<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Team Play</title>
</head>
<header>
<?php include 'inc/navbar.php'; ?>
</header>
<body>
   

    <div class="container col-lg-12">
    <!-- @if(Request::is('/') || ('/home')) affiche le showcase uniquement sur home -->
    <?php include 'inc/carousel.php'; ?>
    
    <!-- @endif -->
    <div class="row">
    <div class="base col-7 col-md-9 col-lg-9">
  
        <!-- @include('inc.messages') affiche les messages d'erreur -->
      

        </div>
        <div class="col-5 col-md-3 col-lg-3">

        <?php include 'inc/sidebar.php'; ?>

        </div>
        </div>


    </div>


 
    <footer id="footer" class="text-center fixed-bottom">
    <p>Copyright 2019 &copy; Frakkass</p>
    
    
    </footer>


  

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>