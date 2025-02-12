<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

    protected $fillable = ['comment', 'score', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
