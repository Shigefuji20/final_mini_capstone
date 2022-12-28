<?php

namespace App\Http\Livewire\Vapes;

use App\Events\UserLog;
use Livewire\Component;
use App\Models\Vape;
class Delete extends Component
{

    public $vapeId;
    public function getVapeProperty() {
        return Vape::select('id', 'vape_name', 'vape_brand', 'price', 'color')
            ->find($this->vapeId);
    }

    public function delete() {
        $this->vape->delete();

        $log_entry = 'Delete Vape: "' .$this->vape->vape_name . '" with and ID: ' . $this->vape->id;
        event(new UserLog($log_entry));

        return redirect('/vape')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/vape');
    }
    public function render()
    {
        return view('livewire.vapes.delete');
    }
}
