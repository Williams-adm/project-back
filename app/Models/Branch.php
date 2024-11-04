<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name',
        'country',
        'city',
        'address',
        'phone',
        'email'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucwords($value), /* Accesor Formateo para la vista */
            set: fn(string $value) => strtolower($value), /* Accesor Formateo para la vista */
        );
    }

    protected function country(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucwords($value), /* Accesor Formateo para la vista */
            set: fn(string $value) => strtolower($value), /* Accesor Formateo para la vista */
        );
    }

    protected function city(): Attribute
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
