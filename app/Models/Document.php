<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['sub_category_id', 'document_category_id', 'title', 'is_required', 'notes', 'sort_order', 'is_active'];
}
