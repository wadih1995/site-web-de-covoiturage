<div class="form-group col-sm-5">
<label for="inputState">point de départ</label>
<select name="pointdepart" wire:model="pointdepart" id="inputState" class="form-control">
<option selected>choisir</option>
@foreach($pointdeparts as $pointdepart)
<option value="{{$pointdepart->id}}">{{$pointdepart->place_depart	}}</option>
@endforeach
</select>
<BR>
<div class="mapouter"><div class="gmap_canvas"><iframe width="350" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:350px;width:350px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:350px;}</style></div></div>
</div>

@if(!is_null($pointarrives))
<div class="form-group col-sm-5">
<label for="inputState">point de destination</label>
<select name="pointdepart" wire:model="pointarrive" id="inputState" class="form-control">
<option selected>choisir</option>
@foreach($pointarrives as $pointarrive)
<option value="{{$pointarrive->id}}">{{$pointarrive->place_arrive}}</option>
@endforeach
</select>
<BR>
<div class="mapouter"><div class="gmap_canvas"><iframe width="350" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:350px;width:350px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:350px;}</style></div></div>     
</div>
@endif







