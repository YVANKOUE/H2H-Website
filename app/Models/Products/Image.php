<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    // Accessors and Mutators
    public function getNameAttribute($name)
    {
        return asset(root_path() . '/products/images/' . $name);
    }

    // RELATIONSHIPS
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
