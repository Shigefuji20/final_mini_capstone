<div>
    <h1>Recent Posts</h1>
    <div class="row offset-3">
            <div class="cs">
                <select class="select" value="form-select" wire:model.lazy="category">
                <option selected disabled>Type</option>
                <option value="all">All Type</option>
                <option value="Cig-A-Like">Cig-A-Likes(1st Generation)</option>
                <option value="Vape pens">Vape Pens(2nd Generation)</option>
                <option value="Mods">Mods(3rd Generation)</option>
                <option value="Pod Mods">Pod Mods</option>
                </select>
                <input class="search" type="text" placeholder="Search" wire:model.lazy="search">
            </div>
            @if (session('message'))
                <div class="alert alert-success mt-5 text-center">{{ session('message') }}</div>
            @endif
    @foreach ($recentPosts as $rp)
        <div class="col-sm-4 mt-5">
            <div class="card rounded shadow-sm" id="card">
                <div class="card-header"><h4 class="mt-2 categ">{{$rp->category}}</h4></div>
                <div class="card-body rounded {{($rp->user->gender === 'male') ? 'male' : 'female'}}" id="card-body"><p style="font-size: 20px;">{{$rp->remarks}} <br><br><br>
                <h6 class="mt-5 underline" style="font-family: sans-serif">From: {{ $rp->user->name }}</h6></p></div>
                <div class="card-footer">
                <span class="time">posted at: {{ $rp->created_at->format('g:i A') }}</span><br>
                @role('admin')
                <a class="btn btn-primary" href="{{ url('editRecentPost', ['recentPost' => $rp->id]) }}">Update</a>
                <a class="btn btn-danger" href="{{ url('deleteRecentPost', ['recentPost' => $rp->id]) }}">Delete</a>
                @endrole
                </div>
            </div>
        </div>
    @endforeach
            @if($recentPosts->count() == 0)
                <h1 class="mt-5 text-center text-danger">
                    There have no post yet 
                </h1>
            @endif
    </div>
    {{$recentPosts->links()}}
</div>


<style>
    .row {
        text-align: center;
    }
    #card {
        min-height: 350px;
    }
    .male {
        background-color: blue;
        color: white;
        transition: all .2s ease-in-out;
    }
    .male:hover {
        background-color: #11338a;
        transform: scale(1.02);
    }
    .female {
        background-color: rgb(190, 120, 120);
        color: white;
        transition: all .2s ease-in-out;
    }
    .female:hover {
        background-color: #ffb1b1;
        transform: scale(1.02);
    }
    .underline {
        border-bottom: 1px solid white;
        border-top: 1px solid white;
        text-align: left;
    }
    .categ:first-letter{
        text-transform: uppercase;
    }
    
    .select {
        background-color: #e4f0f0;
        color: black;
        height: 40px;
        border-radius: 10px;
    }
    .search {
        background-color: #e4f0f0;
        color: black;
        height: 40px;
        border-radius: 10px;
    }
</style>