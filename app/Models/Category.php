<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'is_menu', 'sort_order', 'description', 'icon', 'is_active'];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
