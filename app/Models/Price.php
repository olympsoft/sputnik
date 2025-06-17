<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $title
 * @property int $price
 */
class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
    ];
}
