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
<body style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
<div class="container light-style flex-grow-1 container-p-y">


    <h4 class="font-weight-bold py-3 mb-4">
    <img src="/uploads/avatars/{{ Auth::guard('web')->user()->avatar }}" style="width:45px; height:45px; float:left;  margin-right:25px;">

     bienvenue "{{ Auth::guard('web')->user()->name }}" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <a href="{{ route('user.logout') }}" class="btn btn-primary" onclick="event.preventDefault();document.getElementById('logout-form').submit();">déconnecter</a>
                                     <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
    </h4>
    

    <div class="card overflow-hidden">
      <div class="row no-gutters row-bordered row-border-light">
        <div class="col-md-3 pt-0">
          <div class="list-group list-group-flush account-settings-links">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Créer une demande</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Profile</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">donner votre avis</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">faire une reclamation</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">
               
            @livewire('demande-form') 
            
              
              
            </div>
            <div class="tab-pane fade" id="account-change-password">
              <div class="card-body pb-2">
              <div class="form-group">
                  <div class="row">
                  <img src="/uploads/avatars/{{ Auth::guard('web')->user()->avatar }}" style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;">
                  </div>
                </div>    
                <div class="form-group">
                  <div class="row">
                    <label class="form-label col-sm-3">nom & prénom</label>
                    <h5 class="col-sm-6">{{ Auth::guard('web')->user()->name }}</h5>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <label class="form-label col-sm-3">email</label>
                    <h5 class="col-sm-6">{{ Auth::guard('web')->user()->email }}</h5>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <label class="form-label col-sm-3">numéro de téléphone</label>
                    <h5 class="col-sm-6">{{ Auth::guard('web')->user()->phone }}</h5>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                  <div class="col-md-10 col-md-offset-1">
            <form enctype="multipart/form-data" action="dashboard.user.home" method="POST">
                <label>photo de profile</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="modifier" class="pull-right btn btn-sm btn-warning">
            </form>
            </div>
                      </div>



                
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="account-info">
              <div class="card-body pb-2">

               








              </div>
            </div>
            <div class="tab-pane fade" id="account-social-links">
              <div class="card-body pb-2">

                <div class="form-group">
                @livewire('contact-form')
                
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="account-connections">
              <div class="card-body">
              <div class="form-group">
                @livewire('reclamation-form')
                
                </div>              
              </div>
              
           
              
            
             
             
            </div>
            <div class="tab-pane fade" id="account-notifications">
              <div class="card-body pb-2">

               

            
             
             
              </div>
              <hr class="border-light m-0">
              <div class="card-body pb-2">


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<style type="text/css">
body{
    
    background: #f5f5f5;
    margin-top:20px;
}

.ui-w-80 {
    width: 80px !important;
    height: auto;
}

.btn-default {
    border-color: rgba(24,28,33,0.1);
    background: rgba(0,0,0,0);
    color: #4E5155;
}

label.btn {
    margin-bottom: 0;
}

.btn-outline-primary {
    border-color: #26B4FF;
    background: transparent;
    color: #26B4FF;
}

.btn {
    cursor: pointer;
}

.text-light {
    color: #babbbc !important;
}

.btn-facebook {
    border-color: rgba(0,0,0,0);
    background: #3B5998;
    color: #fff;
}

.btn-instagram {
    border-color: rgba(0,0,0,0);
    background: #500;
    color: #fff;
}

.card {
    background-clip: padding-box;
    box-shadow: 0 1px 4px rgba(24,28,33,0.012);
}

.row-bordered {
    overflow: hidden;
}

.account-settings-fileinput {
    position: absolute;
    visibility: hidden;
    width: 1px;
    height: 1px;
    opacity: 0;
}
.account-settings-links .list-group-item.active {
    font-weight: bold !important;
}
html:not(.dark-style) .account-settings-links .list-group-item.active {
    background: transparent !important;
}
.account-settings-multiselect ~ .select2-container {
    width: 150% !important;
}
.light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}
.light-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}
.material-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}
.material-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}
.dark-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(255, 255, 255, 0.03) !important;
}
.dark-style .account-settings-links .list-group-item.active {
    color: #fff !important;
}
.light-style .account-settings-links .list-group-item.active {
    color: #4E5155 !important;
}
.light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24,28,33,0.03) !important;
}


</style>
 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  //$(document).ready(function () {
    //$(document).on('change', '.pointdepart' ,function() {
        //console.log("hmm it's change");
      //  var cat_id = $(this).val();
        //<div>cat_id</div>
        //console.log(cat_id);
        


    });

  });
</script>
@livewireScripts
</body>

</html>