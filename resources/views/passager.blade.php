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
            <a class="navbar-brand mr-auto" href="index"><img src="img/taxi.png" height="30" width="41"></a>
           <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">     
                <li class="nav-item active"><a class="nav-link" href="index"><i class="fa-solid fa-house"></i> Acceuil</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-align-justify"></i> produits
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="passager">passager</a>
                      <a class="dropdown-item" href="chauffeur">chauffeurs</a>
                    </div>
                </li>
                  <li class="nav-item"><a class="nav-link" href="contacter"><i class="fa-solid fa-comment"></i> Contact</a></li>
                </ul> 
           </div>           
        </div>
    </nav>
    <header class="jumbotron ">
        <div class="container ">
            <div class="row  align-items-center">
            <a class="text-center col-md-12" href="#">
                <img src="img/taxi.png" width="140" height="140" alt="">
            </a>
            </div>
            <div class="row align-items-center offset-4">
                <h2>bienvenue les passagers !</h2>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="card mb-3">
            <img class="card-img-top" src="img/passager.png" width="200px" height="300px" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Inscription</h5>
              <p class="card-text">Si vous êtes nouveau sur service taxi il suffit de cliquer sur le lien "inscrivez vous"
              pour créer votre compte passager et faire une demande  
              </p>
              <a href="{{ route('user.register') }}" class="btn btn-warning">inscrivez vous</a><br>
              <h5 class="card-title">Connexion</h5>
              <p class="card-text">Si vous êtes dèja inscit sur service taxi il suffit de cliquer sur le lien "connectez vous"
                  pour accéder a votre compte .
              </p>
              <a href="{{ route('user.login') }}"class="btn btn-warning">connectez vous</a>
            </div>
          </div>
    </div>

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