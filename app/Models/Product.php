<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'category_id', 'sub_category_id', 'image', 'code', 'description'];

    public function getSlugOptions():SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function subcategory(){
        return $this->hasOne(SubCategory::class, 'id', 'sub_category_id');
    }
    public function type(){
        return $this->hasOne(Type::class, 'id', 'type_id');
    }

    public function relatedProduct(){
        return $this->hasMany(ProductRelation::class, 'product_id', 'id');
    }
}
