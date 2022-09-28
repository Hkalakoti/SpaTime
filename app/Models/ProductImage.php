<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    use HasFactory; use SoftDeletes;

    protected $table = 'product_images';

    protected $fillable = [
        'category_id',
        'product_id',
        'image',
        'date',
        'deleted_at',
    ];

    public $timestamps = true;
}
