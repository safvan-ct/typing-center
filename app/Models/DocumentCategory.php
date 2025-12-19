<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    protected $fillable = ['sub_category_id', 'name', 'slug', 'notes', 'is_active'];

    public function category()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
