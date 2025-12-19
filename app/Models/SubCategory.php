<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SubCategory extends Model
{
    protected $fillable = ['category_id', 'name', 'slug', 'key_service', 'useful_service', 'sort_order', 'description', 'doc_notes', 'image', 'is_active'];

    protected $appends = ['image_url'];

    protected static function booted()
    {
        static::saved(fn() => self::clearMenuCache());
        static::deleted(fn() => self::clearMenuCache());
    }

    protected static function clearMenuCache(): void
    {
        collect(['menu_categories', 'useful_links'])->each(fn($key) => Cache::forget($key));
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function documentCategories()
    {
        return $this->hasMany(DocumentCategory::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class)->whereNull('document_category_id');
    }
}
