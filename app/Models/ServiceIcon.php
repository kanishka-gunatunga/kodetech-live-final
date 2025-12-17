<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceIcon extends Model
{
    protected $fillable = [
        'service_icon_title',
        'service_icon_short_description',
        'service_icon_image',
        'service_id',
    ];

    // Relationship: Each ServiceIcon belongs to a Service
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
