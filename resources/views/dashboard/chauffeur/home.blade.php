<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>service taxi</title>
    @livewireStyles
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7cbd4d2690.js" crossorigin="anonymous"></script>
  </head>
  <body style="background-image: url('https://media.istockphoto.com/photos/man-behind-the-wheel-in-the-evening-picture-id584597736?k=20&m=584597736&s=612x612&w=0&h=8UjxDCh3tPgFgQbw8lZeESYAURRQH386c1BwpmwUVJg='); background-repeat: no-repeat; background-size: 1700px 900px;" >
<div class="container light-style flex-grow-1 container-p-y">


    <h4 class="font-weight-bold py-3 mb-4 text-dark">

    bienvenue "{{ Auth::guard('chauffeur')->user()->name }}"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="{{ route('chauffeur.logout') }}" class="btn btn-primary" onclick="event.preventDefault();document.getElementById('logout-form').submit();">déconnecter</a>
                                     <form action="{{ route('chauffeur.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
    </h4>
    
    <div class="container">
    <div class="card overflow-hidden">
     
        <div class="col-md-12">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="account-general">
                      @foreach($data as $i)
                      
                      <div class="card   mb-3 " style="border: 5px solid black ">
                      
                          <div class="card-body">
                        <div class="row">
                          <p class="card-text col-md-3" ><i class="fa-solid fa-hourglass-start"></i>&nbsp;&nbsp;DEPART :{{$i->depart}}
                          <p class="card-text col-md-3" ><i class="fa-solid fa-hourglass-end"></i>&nbsp;&nbsp;ARRIVE :{{$i->arrive}}
                          <p class="card-text col-md-3" ><i class="fa-solid fa-clock-rotate-left"></i>&nbsp;&nbsp;HEURE :{{$i->heure}}
                          <p class="card-text col-md-3" ><i class="fa-solid fa-child"></i>&nbsp;&nbsp; NOMBRE PLACE :{{$i->nombre}}

                        </div>
                        <div class="row">
                            <div class="card-footer col-md-3"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp; NUMERO:{{$i->telephone}}</div>
                            <div class="card-footer col-md-3"><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;DATE  :{{$i->date}}</div>
                            <div class="card-footer col-md-3"><i class="fa-solid fa-car"></i>&nbsp;&nbsp; MARQUE :{{$i->marque}}</div>
                            <div class="card-footer col-md-3"> </div>
                        </div> 
                     </div>
                      </div>
                      @endforeach
                </div>
                <div class="tab-pane fade" id="account-change-password">
              <div class="card-body pb-2">
              <div class="tab-pane fade active show" id="account-general">
                    
                </div>

             
              </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>