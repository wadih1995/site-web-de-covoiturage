
<div>
   <form wire:submit.prevent="submit">
    <div class="container">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputDepart">Depart </label>
                <input type="text" class="form-control" id="exampleInputDepart"  wire:model="depart">
                @error('depart') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputArrive">Arrive </label>
                <input type="text" class="form-control" id="exampleInputArrive"  wire:model="arrive">
                @error('arrive') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
         </div>
         <div class="row"> 
            <div class="form-group col-md-6">
                <label for="exampleInputHeure">Heure de depart</label>
                <input type="text" class="form-control" id="exampleInputHeure"  wire:model="heure">
                @error('heure') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputDate">Date de depart</label>
                <input type="text" class="form-control" id="exampleInputDate" placeholder="yy-mm-dd"  wire:model="date">
                @error('date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row"> 
            <div class="form-group col-md-4">
                <label for="exampleInputMarque">Marque de voiture </label>
                <input type="text" class="form-control" id="exampleInputMarque"  wire:model="marque">
                @error('marque') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputNombre">Nombres de places </label>
                <input type="text" class="form-control" id="exampleInputNombre"  wire:model="nombre">
                @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputTelephone">Telephone </label>
                <input type="text" class="form-control" id="exampleInputTelephone"  wire:model="telephone">
                @error('telephone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
         </div> 
    <button type="submit" class="btn btn-primary mb-2 offset-5">confirmer</button>
    </div>
</form>
</div>
 