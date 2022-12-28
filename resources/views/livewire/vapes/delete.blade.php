<div>

    <div class="card shadow border border-light" >
        <div class="card-header" style="background-color: rgb(190, 120, 120)">
            <h5 class="text-white text-center mt-2">Delete Vape?</h5>
        </div>
        <div class="card-body">
            <table class="table" >
                <tr>
                    <th >
                        Vape Name
                    </th>
                    <td>
                        {{ $this->vape->vape_name }}
                    </td>
                </tr>
                <tr>
                    <th >
                        Vape Brand
                    </th>
                    <td>
                        {{ $this->vape->vape_brand }}
                    </td>
                </tr>
                <tr>
                    <th >
                         Price
                    </th>
                    <td>
                        {{ $this->vape->price }}
                    </td>
                </tr>
                <tr>
                    <th >
                        Color
                    </th>
                    <td>
                        {{ $this->vape->color }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger" wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-info mx-2" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>

</div>

