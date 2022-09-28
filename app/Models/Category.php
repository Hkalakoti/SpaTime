<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory; use SoftDeletes;

    protected $table = "categories";
    
    protected $fillable = [

        'name',
        'date',
        'status',
        'category_slug',
        'deleted_at',
    ];

    public $timestamps = true;
}
