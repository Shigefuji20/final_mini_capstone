<?php

namespace App\Http\Livewire\Vapes;

use Livewire\Component;
use App\Models\Vape;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $color ='all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function loadVapes()
     {
        $query = Vape::orderBy('vape_name')
            ->search($this->search);

        if ($this->color != 'all') {
            $query->where('color', $this->color);
        }

        $vapes = $query->paginate(5);

        return compact('vapes');
    }

    public function render()
    {
        return view('livewire.vapes.index', $this->loadVapes());
    }
}
