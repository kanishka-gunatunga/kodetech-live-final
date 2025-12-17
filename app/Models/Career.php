<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Career extends Model
{
    use HasSlug;
    use HasFactory;

    protected $fillable = ['career_name','career_overview','career_description', 'working_type','location','salary'];


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('career_name')
            ->saveSlugsTo('slug');
    }

   
}
