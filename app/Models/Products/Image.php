<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    // RELATIONSHIPS
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
