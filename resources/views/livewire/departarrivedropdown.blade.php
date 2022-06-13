<div class="form-group col-sm-5">
<label for="depart">point de départ</label>
<select name="pointdepart" wire:model="selectedDepart" id="inputState" class="form-control">
<option selected>choisir</option>
@foreach($departs as $depart)
<option value="{{$depart->id}}">{{$depart->endroit_depart	}}</option>
@endforeach
</select>
<BR>
<div class="mapouter"><div class="gmap_canvas"><iframe width="350" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:350px;width:350px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:350px;}</style></div></div>
</div>

@if (!is_null($selectedDepart))
<div class="form-group col-sm-5">
<label for="arrive">point de destination</label>
<select name="depart_id" wire:model="pointarrive" id="inputState" class="form-control">
<option selected>choisir</option>
@foreach($arrives as $arrive)
<option value="{{$arrive->id}}">{{$arrive->endroit_arrive}}</option>
@endforeach
</select>
<BR>
<div class="mapouter"><div class="gmap_canvas"><iframe width="350" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:350px;width:350px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:350px;}</style></div></div>     
</div>
@endif

