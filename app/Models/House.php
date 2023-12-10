<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Models\House
 *
 * @method static Builder|House newModelQuery()
 * @method static Builder|House newQuery()
 * @method static Builder|House query()
 * @mixin Eloquent
 */
class House extends Model
{
    protected $fillable = [
        'name',
        'price',
        'bedrooms',
        'bathrooms',
        'storeys',
        'garages'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (House $model) {
            $model->{$model->getKeyName()} = (string)Str::uuid();
        });
    }
}
