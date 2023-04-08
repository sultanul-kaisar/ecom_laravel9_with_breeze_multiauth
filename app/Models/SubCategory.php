<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_title',
        'subcategory_slug',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function subsubcategories(){
        return $this->hasMany(SubSubCategory::class, 'subcategory_id', 'id');
    }

    public function products(){
        return $this->hasMany(Product::class, 'subcategory_id', 'id');
    }
}
