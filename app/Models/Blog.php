<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Blog extends Model
{   
    use HasSlug;
    use HasFactory;

    protected $fillable = ['news_heading','news_description','authur','date','news_image'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('news_heading')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(50);
    }
}
