<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    protected $fillable = ['sub_category_id', 'name', 'description', 'documents', 'is_active'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
