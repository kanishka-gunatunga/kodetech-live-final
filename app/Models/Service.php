<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Models\ServiceIcon;
class Service extends Model
{
    
    use HasSlug;
    use HasFactory;
    protected $fillable = ['service_name','service_overview','service_short_description', 'service_description','service_image'];


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('service_name')
            ->saveSlugsTo('slug');
    }

    public function serviceIcon()
    {
        return $this->hasMany(ServiceIcon::class, 'service_id');
    }
}
