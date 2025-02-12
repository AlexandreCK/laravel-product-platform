<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string|max:500',
            'score' => 'required|integer|min:0|max:5',
        ]);

        $product->ratings()->create($validatedData);

        return redirect()->route('products.show', $product->id);
    }
}
