<div class="row col-sm-12">
    
    <div class="form-group col-sm-6">
        <label for="voiture" class=" col-form-label ">voiture</label>
        <div class="">
            <select wire:model="selectedVoiture" class="form-control">
                <option value="" selected>choisir voiture</option>
                @foreach($voitures as $voiture)
                    <option value="{{ $voiture->id }}">{{ $voiture->name }}</option>
                @endforeach
            </select>
        </div>
        <br>

    </div>
   
    @if (!is_null($selectedVoiture))
        <div class="form-group col-sm-6">
            <label for="heure" class=" col-form-label ">Heure</label>
   
            <div class="">
                <select class="form-control" wire:model="selectedHeure" name="heure_id">
                    <option value="" selected>choisir heure</option>
                    @foreach($heures as $heure)
                        <option value="{{ $heure->id }} ">{{ $heure->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>

        </div>
    @endif
    @if (!is_null($selectedHeure))
        <div class="form-group col-sm-12">
            <label for="city" class=" col-form-label "></label>
   
            <div class="">
                
                    @foreach($infos as $info)
                    <table class="table">
                    <thead>
                        <tr>
                        
                        <th scope="col"><i class="fa-solid fa-money-bill-1-wave"></i>&nbsp; marque</th>
                        <th scope="col"><i class="fa-solid fa-clock"></i>&nbsp; heure</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                        <td>{{ $info->marque}}</td>
                        <td>{{ $info->heure}}</td>
                        </tr>
                    </tbody>
                    </table>
                    @endforeach
                
            </div>
            <br>

        </div>
    @endif


</div>