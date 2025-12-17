<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductIcon extends Model
{
    protected $fillable = [
        'product_icon_title',
        'product_icon_short_description',
        'product_icon_image',
        'product_id',
    ];

    // Relationship: Each ServiceIcon belongs to a Service
    public function product()
    {
        return $this->belongsTo(Service::class, 'product_id');
    }
}
