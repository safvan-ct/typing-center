<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'is_menu', 'sort_order', 'description', 'icon', 'is_active'];

    protected static function booted()
    {
        static::created(fn() => Cache::forget('menu_categories'));
        static::updated(fn() => Cache::forget('menu_categories'));
        static::deleted(fn() => Cache::forget('menu_categories'));
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
