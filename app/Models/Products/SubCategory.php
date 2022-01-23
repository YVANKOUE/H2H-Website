<?php

namespace App\Models\Products;

use Attribute;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'category_id', 'description', 'image'];

    // 
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Accessors and Mutators
    public function getImageAttribute($image)
    {
        return asset(root_path() . '/sub-categories/images/' . $image);
    }
    
    // 
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function setImageAttribute($image)
    {
        $imageName = $this->attributes['slug'] . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/sub-categories/images', $imageName);
        $this->attributes['image'] = $imageName;
    }

    // RELATIONSHIPS
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(\App\Models\Products\Product::class);
    }
}
