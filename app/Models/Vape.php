<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vape extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, $terms)
    {
        collect(explode(" ", $terms))
            ->filter()
            ->each(function ($term) use ($query) {
                $term = '%' . $term . '%';

                $query->where('vape_name', 'like', $term)
                    ->orWhere('vape_brand', 'like', $term);
            });
    }
}
