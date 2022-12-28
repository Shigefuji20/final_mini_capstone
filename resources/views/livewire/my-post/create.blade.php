<div>
    <h1>Create Post</h1>
    <div class="card offset-5" id="post-create">
        
    @if (session('message'))
        <div class="alert alert-success mt-2 text-center">{{ session('message') }}</div>
    @endif
        <div class="card-header" style="background-color: rgb(190, 120, 120)">
            <h3 class="text-center mt-3">Create Post </h3>
            <hr>
            <select name="category" id="select-cat" class="text-center" wire:model.defer="category">
                <option hidden="true" style="height: 20px; width:10rem">Select Type</option>
                <option selected disabled>Type</option>
                <option value="Cig-A-Like">Cig-A-Likes(1st Generation)</option>
                <option value="Vape pens">Vape Pens(2nd Generation)</option>
                <option value="Mods">Mods(3rd Generation)</option>
                <option value="Pod Mods">Pod Mods</option>

            </select>
                @error('category')
                    <p class="text-danger text-center">{{ $message }}</p>
                @enderror
        </div>
        <div class="card-body">
            <textarea name="remarks" id="" cols="55" rows="5" wire:model.defer="remarks"></textarea>
        </div>
        
            @error('remarks')
                <p class="text-danger text-center">{{ $message }}</p>
            @enderror
        <button class="btn  btn-lg btn-primary" wire:click="addPost()">Post</button>
    </div>
</div>


<style>
    #post-create {
        width: 470px;
    }
    #select-cat {
        width: 120px;
        height: 50px;
        margin-left: 37%;
    }
</style>