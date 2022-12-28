<?php

namespace App\Http\Livewire\Vapes;

use App\Events\UserLog;
use App\Models\Vape;
use Livewire\Component;

class Edit extends Component
{

    public $vapeId;
    public $vape_name, $vape_brand, $price, $color;
    public function mount() {
        $this->vape_name = $this->vape->vape_name;
        $this->vape_brand = $this->vape->vape_brand;
        $this->price = $this->vape->price;
        $this->color = $this->vape->color;

    }

    public function editVape() {
        $this->validate([
            'vape_name'             =>          ['required', 'string', 'max:255'],
            'vape_brand'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        $this->vape->update([
            'vape_name'             =>      $this->vape_name,
            'vape_brand'            =>      $this->vape_brand,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        $log_entry = 'Update Vape: "' .$this->vape->vape_name . '" with and ID: ' . $this->vape->id;
        event(new UserLog($log_entry));

        return redirect('/vape')->with('', 'Updated Successfully');
    }

    public function back() {
        return redirect('/vape');
    }
    public function getVapeProperty() {
        return Vape::find($this->vapeId);
    }

    public function render()
    {
        return view('livewire.vapes.edit');
    }
}
