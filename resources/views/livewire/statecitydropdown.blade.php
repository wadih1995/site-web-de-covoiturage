<div class="row col-sm-12">
    
    <div class="form-group col-sm-6">
        <label for="state" class=" col-form-label ">Départ</label>
        <div class="">
            <select wire:model="selectedState" class="form-control">
                <option value="" selected>choisir départ</option>
                @foreach($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </div>
        <br>

    </div>
   
    @if (!is_null($selectedState))
        <div class="form-group col-sm-6">
            <label for="city" class=" col-form-label ">Destination</label>
   
            <div class="">
                <select class="form-control" wire:model="selectedCity" name="city_id">
                    <option value="" selected>choisir destination</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }} ">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>

        </div>
    @endif
    
    @if (!is_null($selectedCity))
        <div class="form-group col-sm-12">
            <label for="city" class=" col-form-label "></label>
   
            <div class="">
                
                    @foreach($infos as $info)
                    <table class="table">
                    <thead>
                        <tr>
                        
                        <th scope="col"><i class="fa-solid fa-money-bill-1-wave"></i>&nbsp; prix</th>
                        <th scope="col"><i class="fa-solid fa-clock"></i>&nbsp; duree</th>
                        <th scope="col"><i class="fa-solid fa-location-dot"></i>&nbsp; distance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                        <td>{{ $info->prix }}</td>
                        <td>{{ $info->duree }}</td>
                        <td>{{ $info->distance }}</td>
                        </tr>
                    </tbody>
                    </table>
                    @endforeach
                
            </div>
            <br>

        </div>
    @endif
</div>





