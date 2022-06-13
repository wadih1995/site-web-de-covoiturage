<!DOCTYPE html>
<html lang="en">

<head>
<title>service taxi</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
      <link href="{{asset('public\css\styles.css')}}"  rel="stylesheet" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm bg-primary fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="index"><img src="img\taxi.png" height="30" width="41"></a>
           <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">     
                <li class="nav-item active"><a class="nav-link" href="index"><i class="fa-solid fa-house"></i> Acceuil</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-align-justify"></i> produits
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="passager">passager</a>
                      <a class="dropdown-item" href="chauffeur">chauffeur</a>
                    </div>
                </li>
                  <li class="nav-item"><a class="nav-link" href="contacter"><i class="fa-solid fa-comment"></i> Contact</a></li>
                </ul> 
           </div>           
        </div>
        <li class="nav-brand mr-auto">
            <a href="connexionPassagerChauffeur" type="button" class="btn btn-dark"> <i class="fa-solid fa-user"></i>se connecter</a>
            <a href="loginChauffeurPassager" type="button" class="btn btn-light"> s'enregistrer</a>
        </li>
    </nav>
    <header class="jumbotron ">
        <div class="container">
            <div class="row row-header"> 
                <div class="col-12 col-sm-6">
                    <h1>Service taxi</h1>
                    <p>Un site web en faveur des passagers et chauffeurs qui offre des courses à prix concurencielle </p>
                </div>
                <div class="col-12 col-sm align-self-center">
                    <img src="img\taxi.png" width="140" height="140" class="img-fluid offset-3">
                </div>
            </div>
        </div> 
    </header>

    <div class="container">
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 col-md-3">
                <h3>chauffeur</h3>
            </div>
            <div class="col col-sm col-md">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="img\chauffeur.png"width="140" height="140" alt="Alberto Somayya">
                    <div class="media-body">
                        <h2 class="mt-0">Description</h2>
                        <p class="d-none d-sm-block">Après avoir créer un compte sur service taxi ,
                            le chauffeur peut choisir une demande  parmis les proposé en profitant de 80 % du 
                            prix de la course .
                            </p>
                    </div>
                </div>
            </div>
        </div>
<br><br>
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 col-md-3">
                <h3>Passager</h3>
            </div>
            <div class="col col-sm col-md">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="img\passager.png" width="140" height="140" alt="Alberto Somayya">
                    <div class="media-body">
                        <h2 class="mt-0">Description</h2>
                        <p class="d-none d-sm-block">Après avoir créer un compte sur service taxi , 
                            le passager peut créer une demande et se profiter de d'un service confortable et un 
                            prix raisonnable .
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <footer class="footer ">
        <div class="container">
            <div class="row">            
                <div class="col-4 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Acceuil</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>produits</h5>
                    <address>
		                <ul class="list-unstyled">
                            <li><a href="passager">passagers</a></li>
                            <li><a href="chauffeur">chauffeurs</a></li>
                        </ul>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div>
                        <a href="http://google.com/+">Google+</a>
                        <a href="http://www.facebook.com/profile.php?id=">Facebook</a>
                        <a href="http://www.linkedin.com/in/">LinkedIn</a>
                        <a href="http://twitter.com/">Twitter</a>
                        <a href="http://youtube.com/">YouTube</a>
                        <a href="mailto:">Mail</a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">           
            <div class="text-center">
                    <p>© Copyright 2022 service taxi</p>
                </div>
           </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="{{asset('node_modules/jquery/dist/jquery.slim.min.js')}}"></script>
    <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/7cbd4d2690.js" crossorigin="anonymous"></script>
</body>

</html>