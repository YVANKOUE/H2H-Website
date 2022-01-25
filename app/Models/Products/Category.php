<?php

namespace App\Models\Products;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'description', 'image'];

    // 
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    // Accessors
    public function getImageAttribute($image)
    {
        return asset(root_path() . '/categories/images/' . $image);
    }

    // Mutators
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function setImageAttribute($image)
    {
        $imageName = $this->attributes['slug'] . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/categories/images', $imageName);
        $this->attributes['image'] = $imageName;
    }

    // RELATIONSHIPS
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    // Event for deleting related subCategories for specified category
    protected static function booted()
    {
        static::deleted(function ($category) {
            foreach ($category->subCategories as $sub_category) {
                $sub_category->delete();
            }
        });
    }
}
