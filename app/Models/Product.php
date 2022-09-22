<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory; use SoftDeletes;

    protected $table = "products";
    
    protected $fillable = [
        'category_id',
        'title',
        'name',
        'price',
        'size',
        'description',
        'image',
        'status',
    ];

    public $timestamps = true;

    public function category() 
    {
        return $this->hasMany(Category::class, 'id', 'category_id');
    }
}
