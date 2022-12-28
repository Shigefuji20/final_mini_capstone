<div>
    <h1>Edit Post</h1>
    <div class="card offset-5" id="post-create">
        
    @if (session('message'))
        <div class="alert alert-success text-center">{{ session('message') }}</div>
    @endif
        <div class="card-header" style="background-color:rgb(190, 120, 120)">
            <h5 class="text-center mt-2">Select Type</h5>
            <select name="category" id="select-cat" class="text-center" wire:model.defer="category">
                <option hidden="true">Type</option>
                <option selected disabled>Type</option>
                <option value="drama">Cig-A-Likes(1st Generation)</option>
                <option value="action">Vape Pens(2nd Generation)</option>
                <option value="sweet">Mods(3rd Generation)</option>
                <option value="comedy">Pod Mods</option>
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
        <button class="btn btn-primary" wire:click="editRecentPost()">Update</button>
        <button class="btn btn-danger" wire:click="back2()">
            Cancel
        </button>
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