<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $table = 'Orders';

    protected $fillable = [
        'id_user',
        'id_product',
        'rental_date',
        'start_time',
        'end_time',
        'address',
        'birthday',
        'passport_series',
        'passport_id',
        'passport_issue_date',
        'passport_issue_by',
        'price'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Products::class, 'id_product');
    }
}
