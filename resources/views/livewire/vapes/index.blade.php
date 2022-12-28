<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <select value="form-select" wire:model.lazy="color">
                    <option value="all">All</option>
                    <option hidden="true">Select Color</option>
                        <option selected disabled>Select Color</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                        <option value="red">Red</option>
                        <option value="pink">Pink</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Search" wire:model.lazy="search">
            </div>

        </div>

    </div>
    <table class="table table-striped shadow border border-light">
        <thead class="col" style="background-color: rgb(190, 120, 120)">
            <tr>
                <th>ID No</th>
                <th>Vape Name</th>
                <th>Vape Brand</th>
                <th>Price</th>
                <th>Color</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vapes as $vape)
                <tr>
                    <td>{{ $vape->id }}</td>
                    <td>{{ $vape->vape_name }}</td>
                    <td>{{ $vape->vape_brand }}</td>
                    <td>{{ $vape->price }}</td>
                    <td>{{ $vape->color }}</td>
                    <td>
                        <a href="{{ url('edit', ['vape' => $vape->id]) }}" class="btn btn-primary" id="ic" title="Edit"><i class="fa fa-gear"></i></a>
                        <a href="{{ url('delete', ['vape' => $vape->id]) }}" class="btn btn-danger" id="ic" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            @if($vapes->count() == 0)
                        <td colspan="7" class="text-center">
                            No Vapes found in this table.
                        </td>
                    @endif
        </tbody>
    </table>
    {{$vapes->links()}}
</div>