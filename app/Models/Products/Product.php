<?php

namespace App\Models\Products;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['sub_category_id', 'name', 'slug', 'brand', 'mini_description', 'long_description', 'price', 'available'];

    // 
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    // Mutators
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // RELATIONSHIPS
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function orders()
    {
        return $this->belongsToMany(\App\Models\Orders\Order::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function offers()
    {
        return $this->belongsToMany(Offer::class);
    }
}
