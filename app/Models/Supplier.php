<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'name',
        'ruc',
        'email',
        'phone',
        'address'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucwords($value), /* Accesor Formateo para la vista */
            set: fn(string $value) => strtolower($value), /* Accesor Formateo para la vista */
        );
    }

    protected function address(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucwords($value), /* Accesor Formateo para la vista */
            set: fn(string $value) => strtolower($value), /* Accesor Formateo para la vista */
        );
    }
}
