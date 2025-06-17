<?php

namespace App\Http\Controllers;

use App\Http\Resources\PriceResource;
use App\Models\Price;

class PriceController extends Controller
{
    public function prices()
    {
        return PriceResource::collection(Price::all());
    }
}
