<?php

namespace App\Models\Products;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'from', 'to', 'discount'];
    
    protected $dates = [
        'from' => 'date:Y-m-d',
        'to' => 'date:Y-m-d',
    ];

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
    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
