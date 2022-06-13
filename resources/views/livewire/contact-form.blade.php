
<div>
   <form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="exampleInputName">nom </label>
        <input type="text" class="form-control" id="exampleInputName"  wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail"  wire:model="email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
        <label for="exampleInputbody">commentaire</label>
        <textarea class="form-control" id="exampleInputbody" wire:model="body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <button type="submit" class="btn btn-primary">envoyer</button>
</form>
</div>
 