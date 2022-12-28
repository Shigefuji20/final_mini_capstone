<?php

namespace App\Http\Livewire\Vapes;

use App\Events\UserLog;
use Livewire\Component;
use App\Models\Vape;

class Create extends Component
{
    public $vape_name, $vape_brand, $price, $color;

    public function addVape() {
        $this->validate([
            'vape_name'             =>          ['required', 'string', 'max:255'],
            'vape_brand'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        Vape::create([
            'vape_name'             =>      $this->vape_name,
            'vape_brand'            =>      $this->vape_brand,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        $log_entry = 'Added Vape ' .$this->vape_name;
        event(new UserLog($log_entry));

        return redirect('/vape')->with('vape', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.vapes.create');
    }
}
