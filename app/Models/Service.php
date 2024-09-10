<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image'
    ];

    public function scopeBusqueda(Builder $consulta, ?string $busqueda): void
    {
        if ($busqueda) {
            $consulta->where('title', 'LIKE', "%$busqueda%")
                ->orWhere('description', 'LIKE', "%$busqueda%");
        }
    }
}
