<!DOCTYPE html>
<html lang="en">

<head>

    <title>servide taxi</title>
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

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Service taxi</h1>
                    <p>Un site web en faveur des passagers et chauffeurs qui offre des courses à prix concurencielle </p>
                </div>
                <div class="col-12 col-sm align-self-center">
                    <img src="img/taxi.png" width="140" height="140" class="img-fluid offset-3">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="index">Acceuil</a></li>
                <li class="breadcrumb-item active">Contact </li>
            </ol>
            <div class="col-12">
               <h3>Contact </h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>informations de localisation</h3>
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                   <h5>notre adresse</h5>
                    <address style="font-size: 100%">
                        Palais du Gouvernement<br>
                        P.O. Box 400<br>
                        N'Djaména<br>
		              <i class="fa fa-phone"></i>: (235) 66 33 13 36<br>
		              <i class="fa fa-fax"></i>: (235) 251 4804<br>
		              <i class="fa fa-envelope"></i>:
                        <a href="mailto:servicetaxi@taxi.net">servicetaxi@taxi.net</a>
		           </address>
            </div>
            <div class="col-12 col-sm-4 offset-sm-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124828.23147056675!2d14.987418346847155!3d12.120209461783015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x111963cd18fcf74f%3A0xb8a3e92c76d2aa3b!2sN&#39;Djamena%2C%20Chad!5e0!3m2!1sen!2stn!4v1654898934400!5m2!1sen!2stn" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-12 col-sm-11 offset-sm-1">
                <div class="btn-group" role="group">
                    <a role="button" class="btn btn-primary" href="tel:+85212345678"><i class="fa fa-phone"></i> Call</a>
                    <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                    <a role="button" class="btn btn-success" href="mailto:servicetaxi@taxi.net"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
            </div>
        </div>

       

    </div>

    <footer class="footer">
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
