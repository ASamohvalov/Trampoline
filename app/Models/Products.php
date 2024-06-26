<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'id_category',
        'size',
        'power_consumption',
        'capacity',
        'installation_time',
        'image'
    ];

    protected $casts = [
        'id_category' => 'integer',
        'price' => 'integer'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
