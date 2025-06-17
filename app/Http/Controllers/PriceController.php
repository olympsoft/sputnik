<?php

namespace App\Http\Controllers;

use App\Http\Resources\PriceResource;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PriceController extends Controller
{
    public function prices(Request $request)
    {
        try {
            $request->validate([
                'currency' => 'nullable|in:RUR,USD,EUR'
            ]);
        } catch(ValidationException $e) {
            abort(404);
        }

        return PriceResource::collection(Price::all());
    }
}
