<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chauffeur Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image: url('https://media.istockphoto.com/photos/man-behind-the-wheel-in-the-evening-picture-id584597736?k=20&m=584597736&s=612x612&w=0&h=8UjxDCh3tPgFgQbw8lZeESYAURRQH386c1BwpmwUVJg='); background-repeat: no-repeat; background-size: 1700px 900px;" >
    <div class="container">
        <div class="row ">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Créer compte Chauffeur </h4><hr>
                 <form action="{{ route('chauffeur.create') }}" method="post">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                     <div class="form-group">
                         <label for="name">Nom</label>
                         <input type="text" class="form-control" name="name" placeholder="Enter votre nom" value="{{ old('name') }}">
                         <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter votre adresse email " value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="phone">téléphone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter votre  numéro" value="{{ old('phone') }}">
                        <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="{{ old('cpassword') }}">
                        <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Confirmer</button>
                     </div>
                     <br>
                     <a href="{{ route('chauffeur.login') }}">j'ai dèja un compte</a>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>