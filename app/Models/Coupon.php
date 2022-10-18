<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $table = 'coupons';

    protected $fillable = [
        'name',
        'code',
        'no_of_users',
        'no_of_times',
        'discount_type',
        'amount',
        'min_amount',
        'status',
    ];

    public $timestamps = false;

}
