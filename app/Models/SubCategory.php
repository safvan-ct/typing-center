<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SubCategory extends Model
{
    protected $fillable = ['category_id', 'name', 'slug', 'is_home', 'is_about', 'sort_order', 'description', 'image', 'is_active'];

    protected $appends = ['image_url'];

    protected static function booted()
    {
        static::created(fn() => Cache::forget('menu_categories'));
        static::updated(fn() => Cache::forget('menu_categories'));
        static::deleted(fn() => Cache::forget('menu_categories'));
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : "https://placehold.co/600x400";
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
