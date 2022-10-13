<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function categories(){
        return $this->belongsToMany(Category::class, 'category_products')->withPivot('id');
    }
}
