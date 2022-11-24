<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRelation extends Model
{
    use HasFactory;

    public function relatedToProduct(){
        return $this->hasOne(Product::class, 'id', 'related_to');
    }
}
