<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * App\Models\House
 *
 * @property string $id
 * @property string $name
 * @property string $price
 * @property int $bedrooms
 * @property int $bathrooms
 * @property int $storeys
 * @property int $garages
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|House newModelQuery()
 * @method static Builder|House newQuery()
 * @method static Builder|House query()
 * @method static Builder|House whereBathrooms($value)
 * @method static Builder|House whereBedrooms($value)
 * @method static Builder|House whereCreatedAt($value)
 * @method static Builder|House whereGarages($value)
 * @method static Builder|House whereId($value)
 * @method static Builder|House whereName($value)
 * @method static Builder|House wherePrice($value)
 * @method static Builder|House whereStoreys($value)
 * @method static Builder|House whereUpdatedAt($value)
 * @mixin Eloquent
 *
 */
class House extends Model
{
    use HasUuids;
    protected $fillable = [
        'name',
        'price',
        'bedrooms',
        'bathrooms',
        'storeys',
        'garages'
    ];
}
